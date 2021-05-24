(function ($) {

	$(document).ready(function () {
		getTableData();

		$('.table--mediapark__filters').on('change', function () {
			getTableData()
		});

	});

	function getTableData() {
		console.log('trymebiasdf')
		let areaF = $('#areaFilter').val();
		let roomF = $('#roomCountFilter').val();
		let windowF = $('#windowSideFilter').val();
		let statusF = $('#statusFilter').val();
		$.post(
			ajax_object.ajax_url,
			{
				action: 'get_table_data',
				area: areaF,
				roomCount: roomF,
				windows: windowF,
				status: statusF
			},
		).done(function (response) {
			let res = JSON.parse(response);
			$("#tableMediaparkBody").empty();
			$.each(res, function (key, value) {
				let discount = value['discount'];
				let discounted = '-'
				let discountClass = 'noDiscount'
				if(discount !== null) {
					discounted = '-' + discount + '%';
					discountClass = 'hasDiscount'
				}
				$("#tableMediaparkBody").append(
					'<tr class="'+discountClass+'">' +
					'<td>' + discounted + '</td>' +
					'<td>' + value['house_nr'] + '</td>' +
					'<td>' + value['house_area'] + '</td>' +
					'<td>' + value['room_count'] + '</td>' +
					'<td>' + value['window_side'] + '</td>' +
					'<td>' + value['status'] + '</td>' +
					'</tr>')
			})


		}).fail(function () {
			console.log('failed')
		})
	}
})(jQuery);
