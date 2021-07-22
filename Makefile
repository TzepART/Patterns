.DEFAULT_GOAL := help

.PHONY: help
help:
	@cat $(MAKEFILE_LIST) | grep -e "^[a-zA-Z_\-]*: *.*## *" | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: app_start
app_start: ## Run project
	@docker compose up -d
	@docker compose exec app composer install --no-progress --no-interaction

.PHONY: app_bash
app_bash: ## Docker PHP console
	@docker compose exec app bash
