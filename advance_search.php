<?php  
error_reporting('0');
include('include/header.php'); 
include('connection.php');
?>

<html>

<head>

</head>
<body>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Advance Search</li>
     </ul>
   </div>
   <div class="col-md-9 search_left">
  <form id="general-search" method="post" action="apro.php">	
   <div class="form_but1" name="gender">
	<label for="sex">Gender : </label>
	<div class="textbox">
		<input type="radio" name="gender" value="male" /> Male &nbsp;&nbsp;
		<input type="radio"   name="gender" value="female"/> Female
		
		<!--<hr />
		<p id="sel"></p><br />
		<input id="btnRadio" type="button" value="Get Selected Value" />-->
	</div>
    </div>
  <div class="form_but1" name="marital">
	<label for="sex">Marital Status : </label>
	<div class="age_grid">
                     <div class="col-sm-4 form_box">
                  <div class="select-block1">
                
		<select name="status"  class="textbox" class="form-text   ">
		<option value="">Select One</option>
		<?php
			$s="select MName from master where MType='3' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
	</select>
	</div>
    </div>
	</div>
   <br/><br/>
  <div class="age_select" id="minage">
		      <label for="dob">Minimum Age<span   title="This field is required.">*</span></label>
		        <div class="age_grid">
                     <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select name="minage" id="min">
	                    <option value="18">18</option>
	                    <option value="19">19</option>
	                    <option value="20">20</option>
                        <option value="21">21</option>
	                    <option value="22">22</option>
	                    <option value="23">23</option>
	                    <option value="24">24</option>
	                    <option value="25">25</option>
	                    <option value="26">26</option>
	                    <option value="27">27</option>
	                    <option value="28">28</option>
	                    <option value="29">29</option>
	                    <option value="30">30</option>
                        <option value="31">31</option>
	                    <option value="32">32</option>
	                    <option value="33">33</option>
	                    <option value="34">34</option>
	                    <option value="35">35</option>
	                    <option value="36">36</option>
	                    <option value="37">37</option>
	                    <option value="38">38</option>
	                    <option value="39">39</option>
	                    <option value="40">40</option>
                        <option value="41">41</option>
	                    <option value="42">42</option>
	                    <option value="43">43</option>
	                    <option value="44">44</option>
	                    <option value="45">45</option>
	                    <option value="46">46</option>
	                    <option value="47">47</option>
	                    <option value="48">48</option>
	                    <option value="49">49</option>
	                    <option value="50">50</option>
                        <option value="51">51</option>
	                    <option value="52">52</option>
	                    <option value="53">53</option>
	                    <option value="54">54</option>
	                    <option value="55">55</option>
	                    <option value="56">56</option>
	                    <option value="57">57</option>
	                    <option value="58">58</option>
	                    <option value="59">59</option>
	                    <option value="60">60</option>
                        </select>
                  </div>
            </div>
            </div>
            </div>
            <br />
            <br />
            <div class="age_select" id="maxage">
		      <label for="dob">Maximum Age<span   title="This field is required.">*</span></label>
		        <div class="age_grid">
                     <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select name="maxage" id="max">
	                    <option value="18">18</option>
	                    <option value="19">19</option>
	                    <option value="20">20</option>
                        <option value="21">21</option>
	                    <option value="22">22</option>
	                    <option value="23">23</option>
	                    <option value="24">24</option>
	                    <option value="25">25</option>
	                    <option value="26">26</option>
	                    <option value="27">27</option>
	                    <option value="28">28</option>
	                    <option value="29">29</option>
	                    <option value="30">30</option>
                        <option value="31">31</option>
	                    <option value="32">32</option>
	                    <option value="33">33</option>
	                    <option value="34">34</option>
	                    <option value="35">35</option>
	                    <option value="36">36</option>
	                    <option value="37">37</option>
	                    <option value="38">38</option>
	                    <option value="39">39</option>
	                    <option value="40">40</option>
                        <option value="41">41</option>
	                    <option value="42">42</option>
	                    <option value="43">43</option>
	                    <option value="44">44</option>
	                    <option value="45">45</option>
	                    <option value="46">46</option>
	                    <option value="47">47</option>
	                    <option value="48">48</option>
	                    <option value="49">49</option>
	                    <option value="50">50</option>
                        <option value="51">51</option>
	                    <option value="52">52</option>
	                    <option value="53">53</option>
	                    <option value="54">54</option>
	                    <option value="55">55</option>
	                    <option value="56">56</option>
	                    <option value="57">57</option>
	                    <option value="58">58</option>
	                    <option value="59">59</option>
	                    <option selected="selected">60</option>
                        </select>
                  </div>
            </div>
            </div>
            </div>
                        <br />
            <br />
			
            <div class="age_select">
		      <label for="height">Minimum Height <span   title="This field is required.">*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  <select name="minheight" id="minheight" class="textbox" class="form-text   ">
		<option value="">Select One</option>
		
			  <?php
			$s="select MName from master where MType='4' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>  
			
	</select>
    </div>
    </div>
</div>
</div>
            <br />
            <br />
<div class="age_select">
		      <label for="height">Maximum Height <span   title="This field is required.">*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  <select name="maxheight" id="maxheight" class="textbox" class="form-text   ">
		<option value="">Select One</option>
		
			  <?php
			$s="select MName from master where MType='4' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>  
			
	</select>
    </div>
    </div>
</div>
</div>

            <br />
            <br />
            <div class="age_select" id="17">
		      <label for="loc">Location<span   title="This field is required.">*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
    
                     <select name="country" class="countries" id="country">
              <option value="country" name="country">Select Country</option>
                      </select>
                     <select name="state" class="states" id="state">
              <option value="state">Select State</option>
                     </select>
                     <select name="city" class="cities" id="city">
              <option value="city">Select City</option>
                     </select>
              </div>
              </div>
              </div>
              </div>
              <br /><br /><br /><br /><br />
			  <div class="form_but1" name="marital">
	<label for="">Manglik : </label>
	<div class="textbox">
		<input type="checkbox" id='check' name='check'  value="dont know" /> Not Know &nbsp;&nbsp;
		<input type="checkbox" id='check' name='check' value="yes"  /> Yes &nbsp;&nbsp;
		<input type="checkbox" id='check' name='check' value="no"  /> No 
	</div>
    </div>
	<br />
    <div>
 <label for="edu"><span>Education<span   title="This field is required.">*</span></label>
		        
                <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div>
                  <select name="edu" height="50%" id="edu" class="textbox" value="edu" multiple="multiple">
	                    <option value="Doesn't Matter">Doesn't Matter</option>
                        <option value="C.A., C.S., ICWAI">C.A., C.S., ICWAI</option>
	                    <option value="M.B.A">M.B.A</option>
	                    <option value="Doctor">Doctor</option>
	                    <option value="Eng., IIT, Diploma Equivalent">Engineer,IIT,Diploma Equivalent</option>
	                    <option value="B.com">B.com</option>
                        <option value="B.B.A">B.B.A</option>
                        <option value="H.S.C">H.S.C</option>
                        <option value="S.S.C">S.S.C</option>
	              </select>
                        </div>
                        </div>
                        </div>
                        </div>
                        <br /><br /><br /><br /><br />
						<div class="age_select">
		      <label for="height">Annual Income<span   title="This field is required.">*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  <select name='annual' size="1"  class='form-text' >
              <option value="">select</option>
			  <?php
			$s="select MName from master where MType='8' ";
			$result=mysql_query($s);
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>  
			</select>

    </div>
    </div>
</div>
</div>
<br /><br />
<div class="age_select">
		      <label for="height">Status Of Family<span   title="This field is required.">*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  <select name="family" id="family"  class="form-text   ">
	                    <option value="">Select one</option>
	                    <?php
			$s="select MName from master where MType='9' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
            </select>
    </div>
    </div>
</div>
</div>
<br /><br />
<div class="age_select">
		      <label for="height">Occupation Status<span   title="This field is required.">*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  <select name="occu" id="occu"  class="form-text">
                      <option value="">Select one</option>
                      <?php
			$s="select MName from master where MType='7' ";
			$result=mysql_query($s);
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
	        </select>
    </div>
    </div>
</div>
</div>
<br /><br />
<div class="age_select" id="15">
		      <label for="weight">Weight <span       >*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  <select name="weight"  class="form-text" id="weight">
	                 <option value="">SELECT</option>   
					 <?php
			$s="select MName from master where MType='11' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
            </select>
            </div>
            </div>
            </div>
</div>
<br/><br/>
         <div class="age_select" id="15">
		      <label for="weight">Specialcase: <span>*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  <select name="special"  class="form-text" id="special">
	                 <option value="">SELECT</option>   
					 <?php
			$s="select MName from master where MType='2' ";
			$result=mysql_query($s);
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
            </select>
                        </div>
                        </div>
						</div>                        
						</div>
                        <br />
                        <input type="submit" name="search" value="Search" class="btn_1 submit" id="search"/>         
 </form>
 </div>
 </div>
 </div>
 <?php include('include/footer.php'); ?>
</body>
</html>
