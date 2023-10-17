all: compile_css open
compile_css:
	sass scss/main.scss css/styles.css
open:
	open index.html
