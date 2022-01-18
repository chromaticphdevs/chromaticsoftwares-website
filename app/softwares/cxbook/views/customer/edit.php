<?php build('content')?>

<div class="row layout-spacing layout-top-spacing" id="cancel-row">
    <div class="col-md-12">
        <ul class="nav nav-tabs  mb-3 mt-3 justify-content-start" id="justifyRightTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="justify-right-home-tab" data-toggle="tab" 
                href="#justify-right-home" role="tab" aria-controls="justify-right-home" 
                aria-selected="true">Personal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="justify-right-profile-tab" data-toggle="tab" 
                href="#justify-right-profile" role="tab" 
                aria-controls="justify-right-profile" aria-selected="true">Contact</a>
            </li>
        </ul>

        <div class="tab-content" id="justifyRightTabContent">
            <div class="tab-pane show active fade " id="justify-right-home" role="tabpanel" 
            aria-labelledby="justify-right-home-tab">
                <?php appGrab('customer/inc/edit_personal')?>    
            </div>
            <div class="tab-pane fade" id="justify-right-profile" role="tabpanel" 
            aria-labelledby="justify-right-profile-tab">
                <?php appGrab('customer/inc/edit_contact')?>   
            </div>
        </div>
    </div>
</div>

</div>
<?php endbuild()?>


<?php build('headers')?>

<style>
    #lineTab{
        height:75px;
    }
    #lineTab li{
        padding:0px;
    }
    #lineTab li a{
        height:75px;
        padding:0px;
        margin:0px;
    }
</style>
<?php endbuild()?>

<?php appGrab('templates/base')?>