<?php build('content')?>
<div class="row layout-spacing layout-top-spacing" id="cancel-row">
    <div class="col-lg-12">
        <div class="widget-content searchable-container list">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                    <form class="form-inline my-2 my-lg-0">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                            <input type="text" class="form-control product-search" id="input-search" placeholder="Search Contacts...">
                        </div>
                    </form>
                </div>

                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                    <div class="d-flex justify-content-sm-end justify-content-center">
                        <div class="switch align-self-center">
                            <a href="<?php echo appRequest('customers/create')?>">
                                <svg id="btn-add-contact" xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" 
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4">
                                </circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line>
                                </svg>
                            </a>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" 
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                            stroke-linejoin="round" class="feather feather-list view-list active-view">
                                <line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line>
                                <line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line>
                                <line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" 
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid view-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="searchable-items list">
                <div class="items items-header-section">
                    <div class="item-content">
                        <div class="">
                            <div class="n-chk align-self-center text-center">
                                <label class="new-control new-checkbox checkbox-primary">
                                    <input type="checkbox" class="new-control-input" id="contact-check-all">
                                    <span class="new-control-indicator"></span>
                                </label>
                            </div>
                            <h4>Name</h4>
                        </div>
                        <div class="user-email">
                            <h4>Email</h4>
                        </div>
                        <div class="user-location">
                            <h4 style="margin-left: 0;">Location</h4>
                        </div>
                        <div class="user-phone">
                            <h4 style="margin-left: 3px;">Phone</h4>
                        </div>
                        <div class="action-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                        </div>
                    </div>
                </div>

                <?php foreach($customers as $key => $row) :?>
                <div class="items">
                    <div class="item-content">
                        <div class="user-profile">
                            <div class="n-chk align-self-center text-center">
                                <label class="new-control new-checkbox checkbox-primary">
                                    <input type="checkbox" class="new-control-input contact-chkbox">
                                    <span class="new-control-indicator"></span>
                                </label>
                            </div>
                            <img src="<?php echo base_url('assets/xs-logo.png')?>" alt="avatar">
                            <div class="user-meta-info">
                                <p class="user-name" data-name="Alan Green">
                                    <?php echo $row->fullname()?>
                                </p>
                                <p class="user-work" data-occupation="Web Developer">
                                    <?php 
                                        if(empty($row->company)) {
                                            echo $row->industry;
                                        }else{
                                            echo $row->company;
                                        }
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="user-email">
                            <p class="info-title">Email: </p>
                            <p class="usr-email-addr" data-email="alan@mail.com">
                                <?php echo $row->emailFirst()?>
                            </p>
                        </div>
                        <div class="user-location">
                            <p class="info-title">Location: </p>
                            <p class="usr-location" data-location="Boston, USA">
                                <?php echo $row->address?>
                            </p>
                        </div>
                        <div class="user-phone">
                            <p class="info-title">Phone: </p>
                            <p class="usr-ph-no" data-phone="+1 (070) 123-4567">
                                <?php echo $row->mobileFirst()?>
                            </p>
                        </div>
                        <div class="action-btn">
                            <a href="<?php echo appRequest("customers/show/{$row->id}")?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M15 12c0 1.654-1.346 3-3 3s-3-1.346-3-3 1.346-3 3-3 3 1.346 3 3zm9-.449s-4.252 8.449-11.985 
                            8.449c-7.18 0-12.015-8.449-12.015-8.449s4.446-7.551 12.015-7.551c7.694 0 11.985 7.551 11.985 7.551zm-7 
                            .449c0-2.757-2.243-5-5-5s-5 2.243-5 5 2.243 5 5 5 5-2.243 5-5z"/></svg>
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus delete"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>
        </div>
    </div>
</div>
<?php endbuild()?>

<?php build('headers')?>
  <link rel="stylesheet" type="text/css" href="<?php echo _path_vendor('cork/assets/css/forms/theme-checkbox-radio.css');?>">
  <link href="<?php echo _path_vendor('cork/plugins/jquery-ui/jquery-ui.min.css');?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo _path_vendor('cork/assets/css/apps/contacts.css');?>" rel="stylesheet" type="text/css" />
<?php endbuild()?>


<?php build('scripts')?>
  <script src="<?php echo _path_vendor('cork/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
  <script src="<?php echo _path_vendor('cork/assets/js/apps/contact.js');?>"></script>
<?php endbuild()?>

<?php appGrab('templates/base')?>