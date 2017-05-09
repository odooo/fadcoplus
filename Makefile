all:
	#

controller:
	@php app/console generate:controller

update_db:
	@php app/console doctrine:schema:update --dump-sql --force

assets:
	@php app/console assets:install
	@php app/console assetic:dump

serve:
	@php app/console server:start
