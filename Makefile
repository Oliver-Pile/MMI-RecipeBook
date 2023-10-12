all: css open
css:
	$(shell sass scss/main.scss css/styles.css)
open:
	open index.html
