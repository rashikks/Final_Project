	<div class="clear"></div>
</div>
<div id="footercontainer">
	<div id="footer">
		
		<div class="clear"></div>
	</div>
</div>
 <script type="text/javascript" src="jquery.min.js"></script>
 <script type='text/javascript' src="pdf.js"></script>
 <script type="text/javascript">  
 $(document).ready(function() {
				$('#download_pdf').click(function () {
				alert('php');
				var pdf = new jsPDF('p', 'pt', 'letter')
				, source = $('#page_content')[0]
				, specialElementHandlers = {
				'#bypassme': function(element, renderer)
				{      
					return true
				}
				}
				margins = {
					top: 10,
					bottom: 10,
					left: 10,
					width: 1200
				};
				pdf.fromHTML(
				
					source
					, margins.left
					, margins.top 
					, {
						'width': margins.width 
						, 'elementHandlers': specialElementHandlers
					},
				function (dispose) {
				
					pdf.save('report.pdf');
				},
				margins
				)
			});
			});
 </script>
 </body>
 </html>