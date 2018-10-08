<!-- FOOTER -->
<!--===================================================-->
<footer id="footer">
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

	<div class="col-sm-10">
		<p class="pad-lft">&#0169; 2018 Active Super Shop</p>
	</div>

	<div class="col-sm-2">
		<select id="language" name="language">
		    <option value="en" <?php if(Session::get('locale', Config::get('app.locale')) == 'en') echo "selected";?> >English</option>
		    <option value="bn" <?php if(Session::get('locale', Config::get('app.locale')) == 'bn') echo "selected";?> >Bangla</option>
		</select>
	</div> 


</footer>