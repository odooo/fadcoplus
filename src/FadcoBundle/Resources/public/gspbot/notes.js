!function($, bot) {

	var currentTab = 'today'
	var reportingTaskId = 0

	function fetchTodayTodos() {		

		$.ajax({
			url: bot.generateUrl('gsp_task_fetch_today_tasks'),
			type: 'GET',
			dataType: 'json'
		}).done(function(response) {
			
			$('.todo-tabs a.today .tab-count').text(response.todayTasksCount)
			$('.todo-tabs a.passed .tab-count').text(response.passedTasksCount)

			for (var i in response.todayTasks) {
				bot.addContent('todo-list', {
					template: 'todo',
					id: response.todayTasks[i].id,
					title: response.todayTasks[i].title,
					description: response.todayTasks[i].description,
					date: response.todayTasks[i].executeAt,
					type: 'today',
				})
			}

			for (var i in response.passedTasks) {
				bot.addContent('todo-list', {
					template: 'todo',
					id: response.passedTasks[i].id,
					title: response.passedTasks[i].title,
					description: response.passedTasks[i].description,
					date: response.passedTasks[i].executeAt,
					type: 'passed',
				})
			}

		})

		$('#btn-submit-report').on('click', function() {

            $.ajax({
                url: $('#report-task-modal').find('form').attr('action'),
                type: 'POST',
                data: $('#report-task-modal').find('form').serialize(),
                success: function(response) {
                	
                    $('#report-task-modal').gspModal('hide')

                    $('#todo-' + reportingTaskId).remove();

                    var $tab = $('.todo-tabs a.' + currentTab + ' .tab-count')
                    $tab.text(parseInt($tab.text()) - 1)
                }
            })                    
        })
	}

	bot.addTemplate({
		name: 'todo-tabs',
		template: `
			<div class="todo-tabs">
				<a href="#" class="active today" data-type="today">
					D'ajourd'hui
					<span class="tab-count">0</span>
				</a>
				<a href="#" class="passed" data-type="passed">
					Dépassés
					<span class="tab-count">0</span>
				</a>
			</div>`,

		setup: function ($tabs, options) {
			$links = $tabs.find('a')

			$links.on('click', function(e) {
				e.preventDefault()

				$links.removeClass('active')
				$(this).addClass('active')
				currentTab = $(this).data('type')

				$('.todo').hide()
				$('.todo.' + currentTab).fadeIn()
			})
		}
	})

	bot.addTemplate({
		name: 'todo',
		template: `
			<div id="todo-__id__" class="todo __type__">
				<h3 class="title">
					__title__
					<a href="#" data-id="__id__" class="btn-edit" title="Faire le rapport"><i class="fa fa-edit"></i></a>
				</h3>
                <p class="description">__description__</p>
                <p class="date">Date d'exécution: __date__</p>
			</div>`,
		variables: ['id', 'title', 'description', 'type', 'date'],
		setup: function($todo, options) {

			options.type == currentTab ? $todo.fadeIn() : $todo.fadeOut()
			
			$todo.find('.btn-edit').on('click', function(e) {
				e.preventDefault()
				
				bot.closeBotZone()
				$('#report-task-modal').gspModal('show')
                $('#report-task-modal').find('form').attr('action', bot.generateUrl('gsp_task_report', { taskId: options.id }))
                reportingTaskId = options.id
			})			
		}
	})

	bot.initialize(function() {
		
		bot.addMenu('Mes notes', 'todo-list')
		
		bot.addContent('todo-list', {
			template: 'todo-tabs'
		})		

		fetchTodayTodos();
	})

}(jQuery, GspBot)