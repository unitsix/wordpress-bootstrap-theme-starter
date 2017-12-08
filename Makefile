#WORK IN PROGRESS - Untested!

ifdef DOTENV
	DOTENV_TARGET=dotenv
else
	DOTENV_TARGET=.env
endif 

################
# Entry Points #
################

build: $(DOTENV_TARGET)
	docker build -f Dockerfile . -t $(IMAGE_NAME) .

dev: $(DOTENV_TARGET)
	docker-compose up make _devdeps _bash

shell: $(DOTENV_TARGET)
	docker-compose up make _bash 
	
	
	
##########
# Others #
##########

# Create .env based on .env.template if .env does not exist
.env:
	@echo "Creating .env with .env.template"
	cp .env.template .env

# Create/Overwrite .env with $(DOTENV)
dotenv:
	@echo "Overwrite .env with $(DOTENV)"
	cp $(DOTENV) .env

_deps:
	rm -fr node_modules
	npm install --production
	
_devdeps:
	npm install
	
_clean:
	rm -fr node_modules .env
    
_bash:
	bash