<?php

  class Transactions extends SoftwareController
  {

    public function __construct()
    {
      $this->transaction = $this->model('TransactionModel');
    }


    public function store()
    {
      $posts = request()->posts();

      $posts = array_remove_kitem('submit' , $posts);

      $result = $this->transaction->store($posts);

      Flash::set("Transaction {$posts['title']} saved");
      if(!$result) {
        flash_err();
      }

      return appRedirect("Customers/show/{$posts['customer_id']}");
    }

    public function index()
    {

    }

    public function create()
    {
      if(!isset($_GET['customer_id']))
      {
        Flash::set("Bad Request" , 'danger');
        return appRedirect("Customers");
      }

      $customer_id = $_GET['customer_id'];
      $user_id     = seal(Auth::get('user')->id);

      $data = [
          'title' => 'Add Transactions',
          'inputAttr' => [
              'class' => 'form-control',
              'form'    => 'transactionForm'
          ],

          'form' => 'transactionForm',

          'inputRequired' => [
              'class' => 'form-control',
              'required' => '',
              'form'    => 'transactionForm'
          ],

          'customer_id' => $customer_id,
          'user_id'     => $user_id
      ];

      return $this->view('transaction/create' , $data);
    }


    public function edit($transaction_id)
    {
      $transaction = $this->transaction->get($transaction_id);

      $data = [
          'title' => 'Add Transactions',
          'inputAttr' => [
              'class' => 'form-control',
              'form'    => 'transactionForm'
          ],

          'form' => 'transactionForm',

          'inputRequired' => [
              'class' => 'form-control',
              'required' => '',
              'form'    => 'transactionForm'
          ],

          'customer_id' => $transaction->customer_id,
          'user_id'     => $transaction->user_id,
          'transaction' => $this->transaction->get($transaction_id)
      ];

      return $this->view('transaction/edit' , $data);
    }

    public function update()
    {
      $posts = request()->inputs();
      $transaction_id = $posts['id'];

      $posts = array_remove_kitem(['submit' , 'id'] , $posts);

      $transaction = $this->transaction->get($transaction_id);

      $result = $this->transaction->update($posts, $transaction_id);

      Flash::set("Transaction {$transaction->title} updated");

      return appRedirect("Customers/show/{$transaction->customer_id}");
    }
  }
