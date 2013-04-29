.PHONY: \
	rsync \
	test \

default: test

test:
	prove -v html.t

# Send all files to public_html
rsync:
	rsync -azu \
		-e 'ssh -p9394' \
		--verbose \
		--exclude=.git \
		--exclude=*~ \
		./ jeanacla@jeanaclark.org:~/public_html
