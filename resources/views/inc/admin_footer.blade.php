<!-- FOOTER -->
<!--===================================================-->
<footer id="footer" style="padding-top:0px !important">
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

	<div class="col-sm-10">
		<p class="pad-lft">&#0169; 2018 Active Super Shop</p>
	</div>

	<div class="col-sm-2">
		<select id="language" name="language" class="form-control">
		    {{-- @foreach (\App\Language::all() as $key => $language)
				<option value="{{ $language->code }}" @php if(Session::get('locale', Config::get('app.locale')) == $language->code) echo "selected"; @endphp >{{ $language->name }}</option>
		    @endforeach --}}
		</select>
	</div>


</footer>
