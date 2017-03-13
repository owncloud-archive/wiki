/**
 * ownCloud - wiki
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Jan Müller <jan.mueller@novapo.net>
 * @copyright Jan Müller 2015
 */

(function ($, OC) {

	var updateList = function(){
		var url = OC.generateUrl('/apps/wiki/projects');
		$.get(url).success(function(response){
			$.each(response, function(k, projectName){
				$('#project-list').append("<li>"+ projectName +"</li>");
			});
		})
	};

	$(document).ready(function () {
		updateList();

		$('#create').click(function () {
			var url = OC.generateUrl('/apps/wiki/projects');
			var data = {
				project: $('#project-name').val()
			};
			$.post(url, data).success(function (response) {
				$('#project-list').append("<li>"+ response +"</li>");
			});

		});
	});

})(jQuery, OC);
