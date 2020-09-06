<?php

$config=[
        'loginform'=>[
                        [
                            'field' => 'email',
                            'label' => 'Email Address',
                            'rules' => 'required|trim|valid_email',
                            "errors" => ['required' => "Email address is required !", 'valid_email' => 'Please enter valid email!']
                        ],
                        [
                            'field' => 'password',
                            'label' => 'Password',
                            'rules' => 'required|trim',
                            "errors" => ['required' => "Password is required !"]
                        ]
                    ],
    'registerform'=>[
                        [
                            'field' => 'username',
                            'label' => 'Username',
                            'rules' => 'required|trim|alpha',
                            "errors" => ['required' => "Username is required !", 'alpha' => 'Please enter valid Username!']
                        ],
                        [
                            'field' => 'email',
                            'label' => 'Email Address',
                            'rules' => 'required|trim|valid_email',
                            "errors" => ['required' => "Email address is required !", 'valid_email' => 'Please enter valid email!']
                            // "errors" => ['required' => "Email address is required !", 'valid_email' => 'Please enter valid email!','unique'=>'Email Already Exists!']
                        ],
                        [
                            'field' => 'phone',
                            'label' => 'Phone',
                            'rules' => 'required|trim|exact_length[10]',
                            "errors" => ['required' => "Phone is required !",'exact_length'=>'Please enter valid Phone Number!']
                        ],
                        [
                            'field' => 'password',
                            'label' => 'Password',
                            'rules' => 'required|trim|min_length[6]',
                            "errors" => ['required' => "Password is required !",
                                'min_length'=>'Password should have min length 6']
                        ]
                    ],
       'postForm'=>[
                        [
                            'field' => 'title',
                            'label' => 'Title',
                            'rules' => 'required|trim',
                            "errors" => ['required' => "Title is required !"]
                        ],
                        [
                            'field' => 'detail',
                            'label' => 'Description',
                            'rules' => 'required|trim',
                            "errors" => ['required' => "Description is required !"]
                        ],
                        [
                            'field' => 'category[]',
                            'label' => 'Category',
                            'rules' => 'required',
                            "errors" => ['required' => "Category is required !"]
                        ]
                    ],
        'update_bio'=>[
                        [
                            'field' => 'update_bio',
                            'label' => 'Bio Section',
                            'rules' => 'required|max_length[200]',
                            "errors" => ['required' => "Bio is required !", 'max_length' => 'It should be under 200!']
                        ]
                    ],
        'update_username'=>[
                        [
                            'field' => 'update_username',
                            'label' => 'Username',
                            'rules' => 'required',
                            "errors" => ['required' => "Username is required !"]
                        ]
                    ],
    'varify_email'=>[
                        
                        [
                            'field' => 'email',
                            'label' => 'Email Address',
                            'rules' => 'required|trim|valid_email',
                            "errors" => ['required' => "Email address is required !", 'valid_email' => 'Please enter valid email!']
                        ]
                    ],
    'varify_otp'=>[
                        [
                            'field' => 'otp',
                            'label' => 'OTP',
                            'rules' => 'required|trim|numeric',
                            "errors" => ['required' => "OTP is required !",'numeric'=>'Enter the right OTP']
                        ],
                        [
                            'field' => 'new_password',
                            'label' => 'New Password',
                            'rules' => 'required|trim',
                            "errors" => ['required' => "New Password is required !"]
                        ],
                        [
                            'field' => 'confirm_new_password',
                            'label' => 'Confirm New Password',
                            'rules' => 'required|trim|matches[new_password]',
                            "errors" => ['required' => "Confirm New Password is required !",'matches'=>'This should be same as new password!']
                        ],
                 ],
        ];
?>
