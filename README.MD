# PayUMoney-Gateway-Integration-CodeIgniter 3.1.5
<div style="line-height:3rem">
	<h6>Quick steps to integrate to your web/app on the go!</h6>
	<ol>
		<li> Clone the repository <code>git clone https://github.com/anburocky3/PayUMoney-Gateway-Integration-CodeIgniter.git</code> </li>
		<li> Open Terminal, type<code>cd PayUMoney-Gateway-Integration-CodeIgniter</code> </li>
		<li> Copy<code>Welcome.php</code>, <code>Status.php</code>controller files in<code>applications/controllers/</code>directory</li>
		<li> Copy<code>product_form.php.php</code>, <code>confirmation.php</code>, <code>success.php</code>, <code>failure.php</code>view files in<code>applications/views/</code>directory</li>
		<li> Customize the controller logic according to your web/app. </li>
	</ol>	
</div>

<div class="card-footer">
	<h6><strong>Code Explanation</strong></h6>
	<ol>
		<li><em>Welcome.php</em> Controller - Displays the product_form.php view page.</li>
		<li><em>Welcome.php/check</em> Method -  Check all parameters required for transaction and generates sha hash and display the confirmation.php view page.</li>
		<li><em>Welcome.php/help</em> Method - Displays the quick integration help page.</li>
		<li><em>Status.php</em> Controller - Process the result and display success, failure page according to the transaction.</li>
	</ol>
</div>
