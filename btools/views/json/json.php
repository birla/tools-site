			<div class="row-fluid">
				<div class="span6 offset3">
					<h1>JSON Visualizer</h1>
					<!-- <p>This tool will help you in visualizing raw JSON data in a HTML table or a CSV file. You can download and save both on your local machine. Since this tool is built entirely in JavaScript, you can save the complete page on your local machine to run it later.</p> -->
					<!-- <p><a class="btn" href="#">Start now &raquo;</a></p> -->
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<form>
						<fieldset>
							<legend>Settings</legend>
							<label for="headers_btn">Headers</label>
							<div id="headers_btn" class="btn-group" data-toggle="buttons-radio">
								<button type="button" class="btn btn-primary disabled " data-set="auto">Auto</button>
								<button type="button" class="btn btn-primary active" data-set='fixed'>Fixed</button>
							</div>
							<label for="whitespace_btn">Preserve Whitespace</label>
							<button id="whitespace_btn" type="button" class="btn btn-primary" data-toggle="button">Yes</button>

							<br/>
						</fieldset>
					</form>
				</div>
				<div class="span9">
					<label for="raw_json">JSON:</label>
					<span class="row-fluid">
						<textarea id="raw_json" rows="10" columns="50" class="span12">
[						{
							"a": 1,
							"b": 1
						}
						,{
							"a": 1,
							"b": 1
						}
						,{
							"a": 1,
							"b": 1
						}
						,{
							"a": 1,
							"b": 1
						}
						,{
							"a": 1,
							"b": 1
						}
						]
						</textarea>
					</span>

					<button id="viz_btn" type="button" class="btn btn-primary" onclick="JSONViz.parse($('#raw_json').val())">Visualize</button>

					<!-- <table class="table table-hover">
						<thead>
							<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<td>1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							</tr>
							<tr>
							<td>2</td>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
							</tr>
							<tr>
							<td>3</td>
							<td colspan="2">Larry the Bird</td>
							<td>@twitter</td>
							</tr>
						</tbody>
						</table> -->
				</div>
			</div>
