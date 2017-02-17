<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>КУА "L.D ЕССЕТ МЕНЕДЖМЕНТ" </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="form.html" class="site_title"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <span>PDF Генератор</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Привіт,</span>
                <h2>Sky City</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Головна</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i>Інформація про клієнта</a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">SKYCITY
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">Допомога</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Вихід</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>КУА "Ел.Ді Ессет Менеджмент"</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Генерація документів<small>Виберіть тип угоди</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps anchor" style="cursor: pointer">
                        <li>
                          <a class="selected" isdone="1" rel="1" onclick="stage1Navigation(this)">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Перший етап<br>
                                              <small>Оформлення покупки</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a class="disabled" isdone="03" rel="2" onclick=" stage2Navigation(this)">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Другий етап<br>
                                              <small>Введення біржевих номерів</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      
                    <div class="stepContainer">
                      <div id="step-2" class="content" style="position: relative;height: 0px; overflow: hidden;transition: all 1s;">
                        <form class="form-horizontal form-label-left">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Перший біржовий номер <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Другий біржевий номер <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                        </form>
                        <button style="position: absolute; right: 120px; bottom: 10px;" onclick="stageTwo()">Другий етап</button>
                      </div>

                      <div id="step-1" class="content" style="display: block;">
                        <h2 class="StepTitle">Заповнення загальної інформації</h2>
                        <p>
                          do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>


                      <!--------------END OF STEPS -->
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group col-md-6 col-sm-12 col-xs-12 personType">
                        <br>
                        <label class="col-md-6 col-sm-6 col-xs-12 control-label">Тип особи
                          </br>
                          <small class="text-navy">виберіть один з варіантів</small>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="radio">
                            <label class="FO">
                              <input type="radio" class="flat" checked name="iCheck"> Фізична особа або ФОП
                            </label>
                          </div>
                          <div class="radio">
                            <label class="YO">
                              <input type="radio" class="flat" name="iCheck"> Юридична особа
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-md-6 col-sm-12 col-xs-12 paymentType">
                        <label class="col-md-6 col-sm-6 col-xs-12 control-label">Спосіб оплати
                          <br>
                          <small class="text-navy">виберіть один з варіантів</small>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="radio">
                            <label class="rozstr">
                              <input type="radio" class="flat" checked name="iCheck1"> Розстрочка
                            </label>
                          </div>
                          <div class="radio">
                            <label class="razova">
                              <input type="radio" class="flat" name="iCheck1"> Разова оплата
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      
                       <div class="form-group  col-md-6 col-sm-12 col-xs-12">
                        <label class="control-label col-md-6 col-sm-6 col-xs-12">Дата укладання договору <span class="required">*</span>
                        </label>
                        <fieldset class="col-md-6 col-sm-12 col-xs-12">
                          <div class="control-group">
                            <div class="controls">
                              <div class="col-md-12 col-sm-12 col-xs-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="Дата підписання договору" aria-describedby="inputSuccess2Status2">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="x_panel fizOsoba">
                  <div class="x_title">
                    <h2>Інформація про клієнта <small>Фізична особа + ФОП</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="individual_name" placeholder="Ім'я" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="individual_surname" placeholder="Прізвище" required="required">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="individual_middlename" placeholder="По батькові" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="individual_citizenship" placeholder="Громадянство" required="required">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
                      
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="email" class="form-control has-feedback-left" id="individual_email" placeholder="Email">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="individual_phone" placeholder="Телефон" data-inputmask="'mask' : '(999) 999-9999'">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Стать</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male">Чоловік
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female">Жінка
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Фактичне місце проживання<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Фактичне місце проживання" required="required" id="individual_homeadress">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ідентифікаційний код<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" required="required" id="individual_id" placeholder="Ідентифікаційний код">
                        </div>
                      </div>

                      <div class="form-group  col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-6 col-xs-12">Дата народження <span class="required">*</span>
                        </label>
                        <fieldset>
                          <div class="control-group ">
                            <div class="controls">
                              <div class="col-md-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="Дата народження клієнта" aria-describedby="inputSuccess2Status2">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="x_title">
                          <h2>Паспортні данні <small><span class="required">*</span>всі поля обов'язкові до заповнення</small></h2>
                      <div class="clearfix"></div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">№ Паспорту <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-4 col-xs-12 form-group">
                          <input id="individual_passport_series" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Серія">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                          <input id="individual_passport_number" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" placeholder="Номер">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Місце видачі <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-6 col-xs-12 form-group">
                          <input id="individual_passport_state" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Регіон">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left;">МВ УДМС України
                        </label>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">в 
                        </label>
                        <div class="col-md-5 col-sm-6 col-xs-12 form-group">
                          <input id="individual_passport_oblast" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Область">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left;">області
                        </label>
                      </div>

                      <div class="form-group  col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-6 col-xs-12">Дата видачі <span class="required">*</span>
                        </label>
                        <fieldset>
                          <div class="control-group ">
                            <div class="controls">
                              <div class="col-md-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="Дата видачі паспорту" aria-describedby="inputSuccess2Status2">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>

                      <div class="x_title">
                          <h2>Місце проживання <small>(реєстрації або перебування)</small></h2>
                      <div class="clearfix"></div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Місто <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-5 col-xs-12 form-group">
                          <input id="individual_passport_city" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Місто">
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12 form-group">
                          <input id="individual_passport_index" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="0" max="99999" placeholder="Індекс">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Адреса <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-5 col-xs-12 form-group">
                          <input id="individual_passport_street" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="вулиця">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 form-group">
                          <input id="individual_passport_house" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="буд.">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12 form-group">
                          <input id="individual_passport_flat" class="date-picker form-control col-md-7 col-xs-12" type="num" placeholder="кв.">
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
                <div class="x_panel yurOsoba">
                  <div class="x_title">
                    <h2>Інформація про клієнта <small>Юридична особа</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Повна назва підприємства<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="company_full_name" class="form-control" required="required" placeholder="Повна назва">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Скорочена назва підприємства<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="company_short_name" class="form-control" required="required" placeholder="Скорочена назва">
                        </div>
                      </div>
                      <label class="col-md-12 col-sm-3 col-xs-12">Данні власника<span class="required">*</span></label>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="company_owner_name" placeholder="Ім'я" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="company_owner_surname" placeholder="Прізвище" required="required">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="company_owner_middlename" placeholder="По батькові" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="company_owner_position" placeholder="Посада" required="required">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>
                      
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="email" class="form-control has-feedback-left" id="company_owner_email" placeholder="Email" required="required">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control" id="company_owner_tel" placeholder="Телефон">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Місцезнаходження<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="company_registration" class="form-control" placeholder="Адреса реєстрації" required="required">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="company_registration_index" class="form-control" placeholder="Індекс" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ідентифікаційний код та ЄДРПОУ<span class="required">*</span></label>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                          <input type="number" id="company_id" class="form-control" required="required" placeholder="Код">
                        </div>
                        <div class="col-md-5 col-sm-4 col-xs-12">
                          <input type="number" id="company_edrpou" class="form-control" required="required" placeholder="ЄДРПОУ">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Номер свідоцтва платника ПДВ<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Номер" id="company_pdv_number">
                        </div>
                      </div>

                      <div class="x_title">
                          <h2>Паспортні данні <small><span class="required">*</span>уповноваженої особи</small></h2>
                      <div class="clearfix"></div>
                      </div>

                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="company_member_name" placeholder="Ім'я" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="company_member_surname" placeholder="Прізвище" required="required">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="company_member_middlename" placeholder="По батькові" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="form-group">
                        <div class="col-md-2 col-sm-2 col-xs-12 form-group">
                          <input id="company_member_passport_series" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Серія">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                          <input id="company_member_passport_number" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" placeholder="Номер паспорту">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Місце видачі <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-6 col-xs-12 form-group">
                          <input id="company_member_passport_region" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Регіон">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left">МВ УДМС України
                        </label>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">в 
                        </label>
                        <div class="col-md-5 col-sm-6 col-xs-12 form-group">
                          <input id="company_member_passport_oblast" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Область">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left">області
                          </label>
                      </div>

                      <div class="form-group  col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-3 col-sm-6 col-xs-12">Дата видачі <span class="required">*</span>
                        </label>
                        <fieldset>
                          <div class="control-group ">
                            <div class="controls">
                              <div class="col-md-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="Дата видачі паспорту" aria-describedby="inputSuccess2Status2">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status5" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Фактичне місце проживання<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Фактичне місце проживання" required="required" id="company_member_live_place">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Посада підписанта<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" id="company_member_position" placeholder="Посада" required="required">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Документ на основі якого делеговані повноваження<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" id="company_member_document" placeholder="Документ">
                        </div>
                      </div>

                      <div class="x_title">
                          <h2>Банківські реквізити <small></small></h2>
                      <div class="clearfix"></div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Розрахунковий рахунок <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                          <input id="company_bank_account" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" placeholder="р/р">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="company_bank_mfo" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" placeholder="МФО">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Назва банку <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                          <input id="company_bank_name" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Назва банку">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

              </div>

              <div class="col-md-6 col-xs-12">
                <div class="x_panel basement">
                  <div class="x_title">
                    <h2>Інформація про приміщення <small>всі поля обов'язкові до заповнення</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Тип приміщення</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control">
                            <option>Р - Квартира</option>
                            <option>А - Комірка</option>
                            <option>С - Комерція</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Приміщення <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                          <input id="building_number" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Номер">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                          <input id="building_section" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Секція">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Приміщення <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                          <input id="building_floor" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Поверх">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                          <input id="building_rooms" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Кількість кімнат">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Загальна площа(проектна)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="м^2" id="building_complete_area">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Вартість 1м^2</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" placeholder="Ціна в гривнях" id="building_price_per_1_m">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Загальна вартість об'єкта інвестування</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" placeholder="Ціна в гривнях" id="building_complete_price">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ціна форвардного контракту</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" placeholder="Ціна в гривнях (числом)" id="building_forward_price_num">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ціна в гривнях (словами)" id="building_forward_price_text">
                        </div>
                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ціна майнових прав на приміщення</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" placeholder="Ціна в гривнях (числом)" id="building_property_price_num">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ціна в гривнях (словами)" id="building_property_price_text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">USD</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" placeholder="Ціна в доларах США (числом)" id="building_property_price_num_usd">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ціна в доларах США (словами)" id="building_property_price_text_usd">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ціна майнових прав на приміщення (ПДВ)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" placeholder="Ціна в гривнях (числом) ПДВ" id="building_property_price_num_pdv">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ціна в гривнях (словами) ПДВ" id="building_property_price_text_pdv">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">USD</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" placeholder="Ціна в доларах США (числом) ПДВ" id="building_property_price_num_pdv_usd">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ціна в доларах США (словами) ПДВ" id="building_property_price_text_pdv_usd">
                        </div>
                      </div>

                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ціна майнових прав на 1м^2 приміщення</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" placeholder="Ціна в гривнях (числом)" id="building_property_price_per1m_num">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ціна в гривнях (словами)" id="building_property_price_per1m_text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">USD</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ціна в доларах США (числом)" id="building_property_price_per1m_num_usd">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ціна в доларах США (словами)" id="building_property_price_per1m_text_usd">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ціна майнових прав на 1м^2 приміщення (ПДВ)</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ціна в гривнях (числом) ПДВ" id="building_property_price_per1m_num_pdv">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ціна в гривнях (словами) ПДВ" id="building_property_price_per1m_text_pdv">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">USD</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ціна в доларах США (числом) ПДВ" id="building_property_price_per1m_num_pdv_usd">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Ціна в доларах США (словами) ПДВ" id="building_property_price_per1m_text_pdb_usd">
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                     

                    </form>
                  </div>
                </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Графік фінансування  <small>всі поля обов'язкові до заповнення</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кількість платежів</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control inputAmount">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                          </select>
                        </div>
                      </div>
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- Generate depends on option value -->
                    <div class="dependGen">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Кінцева дата платежу <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="31" placeholder="чч">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="1" max="12" placeholder="мм">
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                          <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="number" min="2016" max="2100" placeholder="рррр">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума платежу</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Сума ПДВ</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (числом)">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Сума в доларах США (словами)">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
<!-- end -->        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                    </form>
                    <button onclick="stageOne()">Send</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer class="footer_fixed">
          <div class="pull-right">
             Розробка додатку: <a href="https://bubblegum.house">BubbleGum</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.js"></script>
    <script src="../build/js/logic.js"></script>
	
  </body>
</html>
