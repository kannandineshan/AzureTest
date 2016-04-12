<?php

    //THIS PAGE IS DESTINATION WHEN ADMIN WANTS TO CREATE A NEW USER AND WHEN A NEW USER HAS BEEN ADDED TO THE DATABASE



    //sends user back to index.php if not logged in
    session_start();
    if(!isset($_SESSION['ad_email'])){
        header("Location: index.php");
    }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Create Login</title>
    <link rel="stylesheet" href="cssadminpage/screen.css" type="text/css" media="screen" title="default" />

    <link rel="stylesheet" media="all" type="text/css" href="cssadminpage/pro_dropline_ie.css" />

    <!--  jquery core -->
    <script src="jsadminpage/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

    <!--  styled select box script version 2 -->
    <script src="jsadminpage/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
            $('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
        });
    </script>

    <!--  styled select box script version 3 -->
    <script src="jsadminpage/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
        });
    </script>

    <!--  styled file upload script -->
    <script src="jsadminpage/jquery/jquery.filestyle.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $("input.file_1").filestyle({
                image: "images/forms/upload_file.gif",
                imageheight : 29,
                imagewidth : 78,
                width : 300
            });
        });
    </script>

    <!--  date picker script -->
    <link rel="stylesheet" href="cssadminpage/datePicker.css" type="text/css" />
    <script src="jsadminpage/jquery/date.js" type="text/javascript"></script>
    <script src="jsadminpage/jquery/jquery.datePicker.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">
        $(function()
        {

// initialise the "Select date" link
            $('#date-pick')
                    .datePicker(
                            // associate the link with a date picker
                            {
                                createButton:false,
                                startDate:'01/01/2005',
                                endDate:'31/12/2020'
                            }
                    ).bind(
                    // when the link is clicked display the date picker
                    'click',
                    function()
                    {
                        updateSelects($(this).dpGetSelected()[0]);
                        $(this).dpDisplay();
                        return false;
                    }
            ).bind(
                    // when a date is selected update the SELECTs
                    'dateSelected',
                    function(e, selectedDate, $td, state)
                    {
                        updateSelects(selectedDate);
                    }
            ).bind(
                    'dpClosed',
                    function(e, selected)
                    {
                        updateSelects(selected[0]);
                    }
            );

            var updateSelects = function (selectedDate)
            {
                var selectedDate = new Date(selectedDate);
                $('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
                $('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
                $('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
            }
// listen for when the selects are changed and update the picker
            $('#d, #m, #y')
                    .bind(
                            'change',
                            function()
                            {
                                var d = new Date(
                                        $('#y').val(),
                                        $('#m').val()-1,
                                        $('#d').val()
                                );
                                $('#date-pick').dpSetSelected(d.asString());
                            }
                    );

// default the position of the selects to today
            var today = new Date();
            updateSelects(today.getTime());

// and update the datePicker to reflect it...
            $('#d').trigger('change');
        });
    </script> 

    <!-- javascript for random password -->
    <script type='text/javascript' src='jscreatelogin/randompassword.js'></script>

</head>
<body>
<!-- Start: page-top-outer -->
<div id="page-top-outer">

    <!-- Start: page-top -->
    <div id="page-top">



        <div class="clear"></div>

    </div>
    <!-- End: page-top -->

</div>
<!-- End: page-top-outer -->

<div class="clear">&nbsp;</div>

<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat">
    <!--  start nav-outer -->
    <div class="nav-outer">

        <!-- start nav-right -->
        <div id="nav-right">

            <div class="nav-divider">&nbsp;</div>
            <div class="showhide-account"><img src="imagesadminpage/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
            <div class="nav-divider">&nbsp;</div>
            <a href="logout.php" id="logout"><img src="imagesadminpage/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
            <div class="clear">&nbsp;</div>


        </div>
        <!-- end nav-right -->


        <!--  start nav -->
        <div class="nav">
            <div class="table">

                <ul class="select"><li><a href="adminhome.php"><b>Home</b></a>

                </li>
                </ul>

                <div class="nav-divider">&nbsp;</div>



                <ul class="select"><li><a href="#nogo"><b>User Login Setup</b></a>

                    <div class="select_sub">
                        <ul class="sub">
                            <li><a href="createlogin.php">Create User Login</a></li>
                            <li><a href="delete-user.php">Delete User Login</a></li>
                        </ul>
                    </div>

                </li>
                </ul>

                <div class="nav-divider">&nbsp;</div>

                <ul class="select"><li><a href="#nogo"><b>Report</b></a>

                    <div class="select_sub">
                        <ul class="sub">
                            <li><a href="#nogo">Full Report</a></li>
                            <li><a href="#nogo">Survey Query</a></li>
                            <li><a href="#nogo">Delete Report</a></li>

                        </ul>
                    </div>

                </li>
                </ul>

                <div class="nav-divider">&nbsp;</div>


                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <!--  start nav -->

    </div>
    <div class="clear"></div>
    <!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

<div class="clear"></div>

<!-- start content-outer -->
<div id="content-outer">
    <!-- start content -->
    <div id="content">


        <div id="page-heading"><h1>Create User Login</h1></div>


        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
            <tr>
                <th rowspan="3" class="sized"><img src="imagesadminpage/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
                <th class="topleft"></th>
                <td id="tbl-border-top">&nbsp;</td>
                <th class="topright"></th>
                <th rowspan="3" class="sized"><img src="imagesadminpage/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
            </tr>
            <tr>
                <td id="tbl-border-left"></td>
                <td>
                    <!--  start content-table-inner -->
                    <div id="content-table-inner">

                        <table border="0" width="100%" cellpadding="0" cellspacing="0">
                            <tr valign="top">
                                <td>


                                    <!--  start step-holder -->
                                    <div id="step-holder">

                                        <div class="step-dark-left">Add User details</div>


                                        <div class="clear"></div>
                                    </div>
                                    <!--  end step-holder -->

                                    <!-- start id-form -->
                                    <form action='createlogin.php' method='post'>
                                    <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                                        <tr>
                                            <th valign="top">Firstname:</th>
                                            <td><input type="text" class="inp-form" name="firstname"/></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <th valign="top">Surname:</th>
                                            <td><input type="text" class="inp-form" name="surname"/></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <th valign="top">E-mail:</th>
                                            <td><input type="email" class="inp-form" name="email" /></td>
                                            <td></td>

                                        </tr>
                                        <!-- added field for random password -->
                                        <tr>
                                            <th valign="top">Password:</th>
                                            <td>
                                                <label for="pass"></label>
                                                <input type="password" class="inp-form" name="password" id="pass" />
                                            </td>
                                            <td>
                                                <button type="button" onclick="output()">Create Password</button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th valign="top">Currently matched with a child?</th>
                                            <td>
                                                <input type="radio" name="child_matched" value=true>Yes
                                                <input type="radio" name="child_matched" value=false>No
                                            </td>
                                        </tr>
                                        <!-- In the future there should be a function that only shows the next questions
                                        if the volunteer checks the fact that he has a child associated!-->
                                        <tr>
                                            <td>If yes, please answer the following two:</td>
                                        </tr>
                                        <tr>
                                            <th valign="top">Child's gender:</th>
                                            <td>
                                                <input type="radio" name="child_gender" value="male">Male
                                                <input type="radio" name="child_gender" value="female">Female
                                                <input type="radio" name="child_gender" value="other">Other
                                            </td>
                                        </tr>
                                        <tr>
                                            <th valign="top">Child's date of birth:</th>
                                            <td class="no height">

                                                <table border="0" cellpadding="0" cellspacing="0">
                                                    <tr  valign="top">
                                                        <td>
                                                            <select id="d" class="styledselect-day" name="day">
                                                                <option value="">dd</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
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
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select id="m" class="styledselect-month" name="month">
                                                                <option value="">mmm</option>
                                                                <option value="1">Jan</option>
                                                                <option value="2">Feb</option>
                                                                <option value="3">Mar</option>
                                                                <option value="4">Apr</option>
                                                                <option value="5">May</option>
                                                                <option value="6">Jun</option>
                                                                <option value="7">Jul</option>
                                                                <option value="8">Aug</option>
                                                                <option value="9">Sep</option>
                                                                <option value="10">Oct</option>
                                                                <option value="11">Nov</option>
                                                                <option value="12">Dec</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select  id="y"  class="styledselect-year" name="year">
                                                                <option value="">yyyy</option>
                                                                <option value="1990">1990</option>
                                                                <option value="1991">1991</option>
                                                                <option value="1992">1992</option>
                                                                <option value="1993">1993</option>
                                                                <option value="1994">1994</option>
                                                                <option value="1995">1995</option>
                                                                <option value="1996">1996</option>
                                                                <option value="1997">1997</option>
                                                                <option value="1998">1998</option>
                                                                <option value="1999">1999</option>
                                                                <option value="2000">2000</option>
                                                                <option value="2001">2001</option>
                                                                <option value="2002">2002</option>
                                                                <option value="2003">2003</option>
                                                                <option value="2004">2004</option>
                                                                <option value="2005">2005</option>
                                                                <option value="2006">2006</option>
                                                                <option value="2007">2007</option>
                                                                <option value="2008">2008</option>
                                                                <option value="2009">2009</option>
                                                                <option value="2010">2010</option>
                                                                <option value="2011">2011</option>
                                                                <option value="2012">2012</option>
                                                                <option value="2013">2013</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2015">2016</option>
                                                            </select>
                                                        </td>
                                                        <td><a href=""  id="date-pick"><img src="imagesadminpage/createlogin/icon_calendar.jpg" alt="" /></a></td>
                                                    </tr>
                                                </table>

                                            </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th>&nbsp;</th>
                                            <td valign="top">
                                                <input type="submit" value="" class="form-submit" />
                                                <input type="reset" value="" class="form-reset"  />
                                            </td>
                                            <td></td>
                                        </tr>
                                    </table>
                                    </form>
                                    <!-- end id-form  -->

                                    <img style="float:right; padding-right:10px;padding-bottom:10px;" src="imagesadminpage/shared/face-pink.png">

                                </td>

                                <td>



                            <tr>
                                <td><img src="imagesadminpage/shared/blank.gif" width="695" height="1" alt="blank" /></td>
                                <td></td>
                            </tr>
                        </table>

                        <div class="clear"></div>


                    </div>
                    <!--  end content-table-inner  -->
                </td>
                <td id="tbl-border-right"></td>
            </tr>
            <tr>
                <th class="sized bottomleft"></th>
                <td id="tbl-border-bottom">&nbsp;</td>
                <th class="sized bottomright"></th>
            </tr>
        </table>




        <div class="clear">&nbsp;</div>

    </div>
    <!--  end content -->
    <div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->



<div class="clear">&nbsp;</div>

<!-- start footer -->
<div id="footer">
    <!-- <div id="footer-pad">&nbsp;</div> -->
    <!--  start footer-left -->
    <div id="footer-left">
        Copyright 2016 Befriend A Child <a href="">http://www.befriendachild.org.uk/</a>. All rights reserved.</div>
    <!--  end footer-left -->
    <div class="clear">&nbsp;</div>
</div>
<!-- end footer -->

</body>
</html>