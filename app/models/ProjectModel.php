<?php

class ProjectModel extends Model
{


  public function get($key)
  {
    $all = $this->all();
    return $all[$key];
  }
  public function all($where = null, $order_by = null , $limit = null)
  {
    return [
      'kondoko' => [
        'industry' => 'real estate',
        'started'  => '2019',
        'logo'     => 'kondoko.png',
        'screenshots' => [
          'img1.JPG',
          'transaction.png',
          'invoice.png',
        ],
        'access' => true,

        'product_specification' => [
          'tech' => [
            'PHP' , 'MYSQL' , 'JAVASCRIPT' , 'CSS3' , 'HTML5',
            'AJAX' , 'JQUERY'
          ],

          'features' => [
            'Invoicing',
            'Payment Management',
            'Overdue Notication Automation',
            'Reconcilation (Accounting)',
            'Automated Notications'
          ]
        ]
      ],

      'breakthrough' => [
        'industry' => 'Ecommerce-MLM',
        'started'  => '2019',
        'logo'     => 'breakthrough.jpg',
        'screenshots' => [
          'landing2.JPG',
          'binary.JPG',
          'binary-transactions.JPG',
        ],
        'access' => true,

        'product_specification' => [
          'tech' => [
            'PHP' , 'MYSQL' , 'JAVASCRIPT' , 'CSS3' , 'HTML5',
            'AJAX' , 'JQUERY'
          ],

          'features' => [
            'Advanced Sales-chart ',
            'Configurable Commssion',
            'Financing System Extension',
            'Inventory System Extension',
            'Ecommerce System Extension',
          ]
        ]
      ],

      'dbbi' => [
        'industry' => 'Micro Finance',
        'started'  => '2019',
        'logo'     => 'dbbi.jpg',
        'screenshots' => [
          'landing2.JPG',
          'binary.JPG',
          'binary-transactions.JPG',
        ],
        'access' => false
      ],

      'bgmarketing' => [
        'industry' => 'Ecommerce Retail',
        'started'  => '2019',
        'logo'     => 'bgmarketing.jpg',
        'screenshots' => [
          'dashboard.JPG',
          'login.JPG',
          'order.JPG',
        ],
        'access' => true,

        'product_specification' => [
          'tech' => [
            'PHP' , 'MYSQL' , 'JAVASCRIPT' , 'CSS3' , 'HTML5',
            'AJAX' , 'JQUERY'
          ],

          'features' => [
            'Employee Ranking',
            'Employee Point Tracker',
            'Employee Point Cash Conversion'
          ]
        ]

      ],


    ];
  }
}
