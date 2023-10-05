all: css open
css:
	sass scss/main.scss css/styles.css
open:
	open index.html
