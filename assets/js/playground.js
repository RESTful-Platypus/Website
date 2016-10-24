$(function () {
	var claimLinks = function () {
		$('#playground-result code a').click(function (event) {
			event.preventDefault()

			$('#playground [name=uri]').val(event.target.href)
			$('#playground').submit()
		})
	}

	$('#playground').submit(function (event) {
		event.preventDefault()

		var method = $('#playground [name=method]').val()
		var uri = $('#playground [name=uri]').val()

		$.ajax({
			dataType: 'text',
			url: $('#playground [name=uri]').val(),
			method: $('#playground [name=method]').val().toUpperCase()
		}).then(function (data, status) {
			var result = $('#playground-result code')

			// prettify json
			try {
				data = JSON.stringify(JSON.parse(data), null, 2)
			} catch (e) {}

			result.text(data)
			hljs.highlightBlock(result[0])
			result.find('.hljs-string').each(function () {
				var value = $(this).text().replace(/^"(.*)"$/, '$1')
				var uri = value.replace(/\\\//g, '/')

				if (uri.charAt(0) == '/') {
					$(this).html('"<a href="' + uri + '">' + value + '</a>"')
				}
			})

			claimLinks()
		})
	}).submit()
})
