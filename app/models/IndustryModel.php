<?php
class IndustryModel extends Model
{

  public function all($where = null , $order_by = null , $limit = null)
  {
    return [
      ['Micro-Finance' , 'Simplify lending operations ,
by automating manual processes
and improve borowwer experience'],
      ['Real-Estate' , 'Simplifly your management operations'],
      ['Multi-level Marketing' , 'Customized MLM compensation plan for all MLM compnaies to run their MLM business more effectively'],
      ['Ecommerce and Retail' , 'Engaging and exciting software solutions for modern retail'],
      ['Travel and Hospitality' , 'Extend the comfort of your resort with practical software solutions']
    ];
  }
}
