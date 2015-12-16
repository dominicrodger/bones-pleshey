.PHONY: compile watch

help:
	@echo "compile - re-run compass with compression on"
	@echo "watch - run compass in watch mode, for development"

compile:
	cd scss && compass compile --output-style compressed --environment production --force --time

watch:
	cd scss && compass compile --force
	cd scss && compass watch
