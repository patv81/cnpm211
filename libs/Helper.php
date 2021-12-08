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
    public static function cmsBtnAction($type, $link='', $id=-1)
    {
        $xhtml ='';
        if ($type == 'delete'){
            $xhtml='<a href="javascript:trashSingle(\''.$link.'\')" class="rounded-circle btn btn-sm btn-danger" title="delete">
                        <i class="fas fa-trash-alt"></i>
                    </a>';
        }
        else if ($type =='edit'){
            $xhtml.= '<a href="'.$link.'" class="rounded-circle btn btn-sm btn-info" title="edit">
                            <i class="fas fa-pencil-alt"></i>
                      </a>'; 
        }
        else if($type== 'add-to-cart'){
            $xhtml .= '<a data-product-id="' . $id . '"  onClick="' . $link . '" class="rounded-circle btn btn-sm btn-info" title="edit">
                            <i class="fas fa-plus"></i>
            </a>'; 
        } 
        else if ($type == 'remove-from-cart') {
            $xhtml .= '<a data-product-id="'.$id.'" onClick="' . $link . '" class="rounded-circle btn btn-sm btn-info" title="edit">
                            <i class="fas fa-plus"></i>
            </a>';
        }
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
    public static function cmsInput($type,$name,$id,$value,$class,$option=''){
        $xhtml= '<input '.$option.' type="'.$type.'" id="'.$id.'" name="'.$name.'" value="'.$value.'" class="'.$class.'">';
        
        return $xhtml;
    }
    public static function cmsRowForm($lbname,$input,$require=false){
        $strRequire='';
        if($require==true){$strRequire = ' required';}
        $xhtml= '<div class="form-group row">
                    <label for="'.$lbname.'" class="col-sm-2 col-form-label text-sm-right '.$strRequire.'">'.$lbname.'</label>
                    <div class="col-xs-12 col-sm-8">
                        '.$input.'
                    </div>
                </div>';
        return $xhtml;
    }
    public static function cmsSelectbox($name, $class,$id, $arrValue, $keySelect = 'default', $style = null){
        $xhtml= 
        '<select id="'.$id.'" name="'.$name.'" class="'.$class.'" style="'.$style.'">';
        foreach($arrValue as $key=>$value){
            if ($key == $keySelect) {
                $xhtml .= '<option selected="selected" value = "' . $key . '">' . $value . '</option>';
            } else {
                $xhtml .= '<option value = "' . $key . '">' . $value . '</option>';
            }
        }
        $xhtml .= '</select>';
        return $xhtml;
    }
    public static function cmsButton($name, $link, $class,$type='new')
    {

        $xhtml  = '';
        if ($type == 'new') {
            $xhtml = '<a href="' . $link . '" class="' . $class . '"> ' . $name . '</a>';
        } else if ($type == 'submit') {
            $xhtml = '<a  onclick="javascript:submitForm(\'' . $link . '\');" class="' . $class . '"> ' . $name . '</a>';
        }
        return $xhtml;

    }
 }
?>