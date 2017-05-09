/**
 * Simple jQuery plugin to replace page content with
 * bootstrap modal content
 *
 * @author Eldo Magan <magan.eldo@gmail.com>
 */
 
!function ($) {
    var GSPModal = function(element, options) {
        this.options    = options
        this.$wrapper   = $('.content-wrapper')
        this.$element   = $(element)
        this.$dialog    = this.$element.find('.modal-dialog')
        this.isShown    = false;

        this.$element.addClass('gsp-modal')
    }

    GSPModal.DEFAULTS = {
        show: true
    }

    GSPModal.openedModalCount = 0

    GSPModal.prototype.show = function() {                

        if (this.isShown) {
            return
        }

        var _self = this
        var deferred = new $.Deferred()

        this.isShown = true
        GSPModal.openedModalCount++

        _self.$element.css({
            position: 'fixed',
            top: (_self.$wrapper.height() / 2),
            left: (_self.$wrapper.width() / 2),
            bottom: (_self.$wrapper.height() / 2),
            right: (_self.$wrapper.width() / 2),
            background: 'rgba(0, 0, 0, 0.3)'
        })

        _self.$element.show()

        var top = $(document.body).scrollTop() == 0 ? 50 : 0
        var left = $('.main-sidebar').width()

        _self.$element.animate({
            top: top,
            right: 0,
            bottom: 0,
            left: left
        }, 300, function() {
            deferred.resolve()
        })                    

        $('body').css('overflow-y', 'hidden')

        _self.$element.find('[data-dismiss="gsp-modal"]').on('click', function(e) {
            _self.hide()
        })

        return deferred
    }

    GSPModal.prototype.hide = function() {

        if (!this.isShown) {
            return
        }

        GSPModal.openedModalCount--        

        this.$element.hide()
        this.isShown = false

        if (GSPModal.openedModalCount == 0) {
            $('body').css('overflow-y', 'auto')
        }
    }

    GSPModal.prototype.loading = function() {

        var _self = this

        if (this.isShown) {
            return
        }

        this.show()
        _self.$element.find('.modal-body').html('<div style="height: 100%; position: relative"><div style="position: absolute; width: 100%; top: 50%; transform: translateY(-50%)" class="text-center"><img src="../bundles/GSPBundle/load.gif"></div></div>')
    }

    GSPModal.prototype.toggle = function() {
        this.isShown == true ? this.hide() : this.show()
    }

    function Plugin(option) {                
        return this.each(function () {                    
            var $this   = $(this)
            var data    = $this.data('gsp.modal')
            var options = $.extend({}, GSPModal.DEFAULTS, $this.data(), typeof option == 'object' && option)

            if (!data) {
                $this.data('gsp.modal', (data = new GSPModal(this, options)))
            }

            if (typeof option == 'string') {
                data[option]()
            } else if (option.show) {                        
                data.show()
            } else if (option.toggle) {
                data.toggle()
            }
        })
    }

    $.fn.gspModal             = Plugin
    $.fn.gspModal.Constructor = GSPModal

    $(document).on('click.bs.modal.data-api', '[data-toggle="gsp-modal"]', function (e) {
        var $this   = $(this)
        var href    = $this.attr('href')
        var $target = $($this.attr('data-target') || (href && href.replace(/.*(?=#[^\s]+$)/, ''))) // strip for ie7
        var option  = $target.data('bs.modal') ? 'toggle' : $.extend($target.data(), $this.data())

        if ($this.is('a')) {
            e.preventDefault()
        }

        Plugin.call($target, option)
    })
}(jQuery)