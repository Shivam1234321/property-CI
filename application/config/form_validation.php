<?php
  $config = array(
    
    'adminlogin' => array(
                      array(
                         'field' => 'email',
                         'label' => 'Email',
                         'rules' => 'required|xss_clean|valid_email',
                         'errors' => array(
                             'required' => "Enter %s",
                             'valid_email' => 'Enter Valid %s'
                         ), 
                      ),
                      array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|xss_clean',
                        'errors' => array(
                            'required' => "Enter %s"
                        ), 
                     ),
            ),
    'admincp'       =>array(
                      array(
                          'field' => 'opass',
                          'label' => 'Old Password',
                          'rules' => 'required|xss_clean',
                          'errors' => array(
                            'required' => "Enter %s"
                          ),
                      ),
                      array(
                          'field' => 'npass',
                          'label' => 'New Password',
                          'rules' => 'required|xss_clean',
                          'errors' => array(
                            'required' => "Enter %s"
                        ),
                      ),
                      array(
                          'field' => 'cpass',
                          'label' => 'Confirm Password',
                          'rules' => 'required|xss_clean|matches[npass]',
                          'errors' => array(
                            'required' => "Enter %s"
                        ),
                      ),
                ),     
    'blog'          => array(
                        array(
                            'field' => 'title',
                            'label' => 'Title',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => "Enter %s"
                            ),
                        ),
                        array(
                            'field' => 'author',
                            'label' => 'Author',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => "Enter %s"
                            ),
                        ),
                        array(
                            'field' => 'subject',
                            'label' => 'Subject',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => "Enter %s"
                            ),
                        ),
                        array(
                            'field' => 'description',
                            'label' => 'Description',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => "Enter %s"
                            ),
                        ),
                ),

    'blog_comment'     => array(
                    array(
                        'field' => 'name',
                        'label' => 'Title',
                        'rules' => 'required|xss_clean',
                        'errors' => array(
                            'required' => "Enter %s"
                        ),
                    ),
                    array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|xss_clean|valid_email',
                        'errors' => array(
                            'required' => "Enter %s",
                            'valid_email'=>'Enter Valid %s'
                        ),
                    ),
                    array(
                        'field' => 'comment',
                        'label' => 'Comment',
                        'rules' => 'required|xss_clean',
                        'errors' => array(
                            'required' => "Enter %s"
                        ),
                    )
            ),
    
    'register'     => array(
                        array(
                            'field' => 'name',
                            'label' => 'Title',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => "Enter %s"
                            ),
                        ),
                        array(
                            'field' => 'email',
                            'label' => 'Email',
                            'rules' => 'required|xss_clean|valid_email|is_unique[register.email]',
                            'errors' => array(
                                'required' => "Enter %s",
                                'valid_email'=>'Enter Valid %s'
                            ),
                        ),
                        array(
                            'field' => 'mobile',
                            'label' => 'Mobile',
                            'rules' => 'required|xss_clean|min_length[10]|max_length[10]|is_unique[register.mobile]',
                            'errors' => array(
                                'required' => "Enter %s"
                            ),
                        ),
                        array(
                            'field' => 'address',
                            'label' => 'Address',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => "Enter %s"
                            ),
                        ),
                        array(
                            'field' => 'password',
                            'label' => 'Password',
                            'rules' => 'required|xss_clean|min_length[8]',
                            'errors' => array(
                                'required' => "Enter %s"
                            ),
                        ),
                        array(
                            'field' => 'cpassword',
                            'label' => 'Confirm Password',
                            'rules' => 'required|xss_clean|min_length[8]|matches[password]',
                            'errors' => array(
                                'required' => "Enter %s"
                            ),
                        ),
                        
                ),

    'login'     => array(
            
                    array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|xss_clean|valid_email',
                        'errors' => array(
                            'required' => "Enter %s",
                            'valid_email'=>'Enter Valid %s'
                        ),
                    ),
                    array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|xss_clean|min_length[8]',
                        'errors' => array(
                            'required' => "Enter %s"
                        ),
                    ),
                ), 
    'usercp'       =>array(
                    array(
                        'field' => 'opass',
                        'label' => 'Old Password',
                        'rules' => 'required|xss_clean',
                        'errors' => array(
                          'required' => "Enter %s"
                        ),
                    ),
                    array(
                        'field' => 'npass',
                        'label' => 'New Password',
                        'rules' => 'required|xss_clean',
                        'errors' => array(
                          'required' => "Enter %s"
                      ),
                    ),
                    array(
                        'field' => 'cpass',
                        'label' => 'Confirm Password',
                        'rules' => 'required|xss_clean|matches[npass]',
                        'errors' => array(
                          'required' => "Enter %s"
                      ),
                    ),
              ),

    'useremailchange'       =>array(
                    array(
                        'field' => 'password',
                        'label' => 'Old Password',
                        'rules' => 'required|xss_clean',
                        'errors' => array(
                          'required' => "Enter %s"
                        ),
                    ),
                    array(
                        'field' => 'email',
                        'label' => 'New Email',
                        'rules' => 'required|xss_clean',
                        'errors' => array(
                          'required' => "Enter %s"
                      ),
                    ),
                    array(
                        'field' => 'cemail',
                        'label' => 'Confirm Email',
                        'rules' => 'required|xss_clean|matches[email]',
                        'errors' => array(
                          'required' => "Enter %s"
                      ),
                    ),
              ),                      
        
    'contactus'     => array(
                array(
                    'field' => 'name',
                    'label' => 'Name',
                    'rules' => 'required|xss_clean',
                    'errors' => array(
                        'required' => "Enter %s"
                    ),
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|xss_clean|valid_email',
                    'errors' => array(
                        'required' => "Enter %s",
                        'valid_email'=>'Enter Valid %s'
                    ),
                ),
                array(
                    'field' => 'subject',
                    'label' => 'Subject',
                    'rules' => 'required|xss_clean',
                    'errors' => array(
                        'required' => "Enter %s"
                    ),
                ),
                array(
                    'field' => 'message',
                    'label' => 'Message',
                    'rules' => 'required|xss_clean',
                    'errors' => array(
                        'required' => "Enter %s"
                    ),
                ),
            ),   

    'moving_stories'  => array(
                            array(
                                'field' => 'fname',
                                'label' => 'First Name',
                                'rules' => 'required|xss_clean',
                                'errors' => array(
                                    'required' => 'Enter %s'
                                ),
                            ),
                            array(
                                'field' => 'lname',
                                'label' => 'Last Name',
                                'rules' => 'required|xss_clean',
                                'errors' => array(
                                    'required' => 'Enter %s'
                                ),
                            ),
                            array(
                                'field' => 'email',
                                'label' => 'Email',
                                'rules' => 'required|xss_clean|valid_email',
                                'errors' => array(
                                    'required' => 'Enter %s'
                                ),
                            ),
                            array(
                                'field' => 'mobile',
                                'label' => 'Mobile',
                                'rules' => 'required|xss_clean|min_length[10]|max_length[10]',
                                'errors' => array(
                                    'required' => 'Enter %s'
                                ),
                            ),
                            array(
                                'field' => 'type',
                                'label' => 'Type',
                                'rules' => 'required|xss_clean',
                                'errors' => array(
                                    'required' => 'Select %s'
                                ),
                            ),
                            array(
                                'field' => 'decision',
                                'label' => 'Decision',
                                'rules' => 'required|xss_clean',
                                'errors' => array(
                                    'required' => 'Enter %s'
                                ),
                            ),
                            array(
                                'field' => 'challenge',
                                'label' => 'Challenge',
                                'rules' => 'required|xss_clean',
                                'errors' => array(
                                    'required' => 'Enter %s'
                                ),
                            ), 
                            array(
                                'field' => 'happy',
                                'label' => 'Happy',
                                'rules' => 'required|xss_clean',
                                'errors' => array(
                                    'required' => 'Enter %s'
                                ),
                            ),
                            array(
                                'field' => 'moving_stories',
                                'label' => 'Moving Story',
                                'rules' => 'required|xss_clean',
                                'errors' => array(
                                    'required' => 'Enter %s'
                                ),
                            ), 

            ),        

    'property_type' => array(
                        array(
                            'field' => 'name',
                            'label' => 'Property Type',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
            ),  

    'city' => array(
                        array(
                            'field' => 'city',
                            'label' => 'City',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
            ),                  
               
    'property' => array(
                        array(
                            'field' => 'category',
                            'label' => 'Categiry',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
                        array(
                            'field' => 'title',
                            'label' => 'Title',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
                        array(
                            'field' => 'slug',
                            'label' => 'Slug',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
                        array(
                            'field' => 'property_type',
                            'label' => 'Property Type',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
                        array(
                            'field' => 'address',
                            'label' => 'Address',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
                        array(
                            'field' => 'price',
                            'label' => 'Price',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
                        array(
                            'field' => 'no_of_bedroom',
                            'label' => 'Number Of Bedroom',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
                        array(
                            'field' => 'no_of_bathroom',
                            'label' => 'Number Of Bathroom',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
                        array(
                            'field' => 'city',
                            'label' => 'City',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
                        array(
                            'field' => 'furnish_type',
                            'label' => 'furnish_type',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
                        array(
                            'field' => 'is_available_for_student',
                            'label' => 'Categiry',
                            'rules' => 'required|xss_clean',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
                        array(
                            'field' => 'description',
                            'label' => 'Description',
                            'rules' => 'required',
                            'errors' => array(
                                'required' => 'Enter %s'
                            ),
                        ),
            ),            
                

  );
?>