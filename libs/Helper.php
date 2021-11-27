<?php 
class Helper{
    public static function cmsStatus($statusValue,$link,$id){


        $strStatus = ($statusValue == 1) ? ["btn-success","fa-check"] : 
                                       ["btn-danger","fa-minus"]; 

        $xhtml   = '<a id="status-'.$id.'" href="javascript:changeStatus(\''.$link.'\')" 
                    class="my-btn-state rounded-circle btn btn-sm '.$strStatus[0].' ">
                           <i class="fas '.$strStatus[1].'"></i>
                    </a>';
    return $xhtml;
    }
    public static function cmsCheckBox($id){
        $xhtml= '                                     
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="checkbox-'.$id.'" name="checkbox[]" value="'.$id.'">
            <label for="checkbox-'.$id.'" class="custom-control-label"></label>
        </div>';
        return  $xhtml;
    }
 }
?>