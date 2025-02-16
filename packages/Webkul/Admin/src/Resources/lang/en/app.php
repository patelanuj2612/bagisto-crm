<?php
    return [
        'dashboard' => [
            'title'             => 'Dashboard',
            'cards'             => 'Cards',
            'column'            => 'Column',
            'done'              => 'Done',
            'activity'          => 'Activity',
            'activities'        => 'Activities',
            'top_leads'         => 'Top Leads',
            'stages'            => 'Stages',
            'emails'            => 'Emails',
            'custom_card'       => 'Custom Card',
            'customers'         => 'Customers',
            'top_customers'     => 'Top Customers',
            'leads_started'     => 'Leads started',
            'products'          => 'Products',
            'top_products'      => 'Top Products',
            'leads_started'     => 'Leads started',
            'leads_over_time'   => 'Leads over time',
            'no_record_found'   => 'No record found',
            'week'              => 'Week',
        ],

        'layouts' => [
            'dashboard'     => 'Dashboard',
            'leads'         => 'Leads',
            'mail'          => [
                'title'   => 'Mail',
                'compose' => 'Compose',
                'inbox'   => 'Inbox',
                'draft'   => 'Draft',
                'outbox'  => 'Outbox',
                'sent'    => 'Sent',
                'trash'   => 'Trash',
                'setting' => 'Setting',
            ],
            'activities'    => 'Activities',
            'contacts'      => 'Contacts',
            'persons'       => 'Persons',
            'organizations' => 'Organizations',
            'products'      => 'Products',
            'settings'      => 'Settings',
            'roles'         => 'Roles',
            'users'         => 'Users',
            'attributes'    => 'Attributes',
            'my-account'    => 'My Account',
            'sign-out'      => 'Sign Out',
            'back'          => 'Back',
            'name'          => 'Name',
            'configuration' => 'Configuration',
            'activities'    => 'Activities',
        ],

        'contacts' => [
            'organizations' => [
                'title'          => 'Organizations',
                'organization'   => 'Organization',
                'add-title'      => 'Add Organization',
                'edit-title'     => 'Edit Organization',
                'save-btn-title' => 'Save as Organization',
                'back'           => 'Back',
                'cancel'         => 'Cancel',
                'create-success' => 'Organization created successfully.',
                'update-success' => 'Organization updated successfully.',
                'delete-success' => 'Organization deleted successfully.',
                'delete-failed'  => 'Organization can not be deleted.',
            ],

            'persons' => [
                'title'          => 'Persons',
                'person'         => 'Person',
                'add-title'      => 'Add Person',
                'edit-title'     => 'Edit Person',
                'save-btn-title' => 'Save as Person',
                'back'           => 'Back',
                'cancel'         => 'Cancel',
                'create-success' => 'Person created successfully.',
                'update-success' => 'Person updated successfully.',
                'delete-success' => 'Person deleted successfully.',
                'delete-failed'  => 'Person can not be deleted.',
            ],
        ],

        'leads' => [
            'title'                    => 'Leads',
            'add-title'                => 'Add Lead',
            'edit-title'               => 'Edit Lead',
            'save-btn-title'           => 'Save as Lead',
            'save'                     => 'Save',
            'upload'                   => 'Upload',
            'back'                     => 'Back',
            'cancel'                   => 'Cancel',
            'details'                  => 'Details',
            'stage'                    => 'Stage',
            'new'                      => 'New',
            'won-lost'                 => 'Won/Lost',
            'won'                      => 'Won',
            'lost'                     => 'Lost',
            'change-stage'             => 'Change Stage',
            'lost-reason'              => 'Lost Reason',
            'closed-date'              => 'Closed Date',
            'contact-person'           => 'Contact Person',
            'add-tag'                  => 'Add Tag',
            'name'                     => 'Name',
            'email'                    => 'Email',
            'contact-numbers'          => 'Contact Numbers',
            'organization'             => 'Organization',
            'address'                  => 'Address',
            'products'                 => 'Products',
            'item'                     => 'Item',
            'price'                    => 'Price',
            'quantity'                 => 'Quantity',
            'amount'                   => 'Amount',
            'create-success'           => 'Lead created successfully.',
            'update-success'           => 'Lead updated successfully.',
            'delete-success'           => 'Lead deleted successfully.',
            'delete-failed'            => 'Lead can not be deleted.',
            'file-upload-success'      => 'File(s) uploaded successfully.',
            'file-upload-error'        => 'File(s) can not be uploaded.',
            'note'                     => 'Note',
            'activity'                 => 'Activity',
            'call'                     => 'Call',
            'meeting'                  => 'Meeting',
            'lunch'                    => 'Lunch',
            'files'                    => 'Files',
            'type'                     => 'Type',
            'description'              => 'Description',
            'schedule'                 => 'Schedule',
            'from'                     => 'From',
            'to'                       => 'To',
            'cc'                       => 'Cc',
            'bcc'                      => 'Bcc',
            'email-placeholder'        => 'Press enter to add emails',
            'file'                     => 'File',
            'subject'                  => 'Subject',
            'reply'                    => 'Reply',
            'all'                      => 'All',
            'notes'                    => 'Notes',
            'calls'                    => 'Calls',
            'meetings'                 => 'Meetings',
            'lunches'                  => 'Lunches',
            'emails'                   => 'Emails',
            'files'                    => 'Files',
            'planned'                  => 'Planned',
            'done'                     => 'Done',
            'edit'                     => 'Edit',
            'mark-as-done'             => 'Mark as Done',
            'remove'                   => 'Remove',
            'empty-planned-activities' => 'You have no planned activities.',
            'empty-done-activities'    => 'You have no done activities.',
            'note-added'               => 'Note added',
            'call-scheduled'           => 'Call scheduled at :from - :to',
            'meeting-scheduled'        => 'Meeting scheduled at :from - :to',
            'lunch-scheduled'          => 'Lunch scheduled at :from - :to',
            'email-scheduled'          => 'Email scheduled at :from - :to',
            'file-added'               => 'File added',
            'lead_stage_updated'       => 'Success: Lead stage updated successfully!',
        ],

        'mail' => [
            'title'           => 'Mail - :type',
            'compose'         => 'Compose',
            'inbox'           => 'Inbox',
            'draft'           => 'Draft',
            'outbox'          => 'Outbox',
            'sent'            => 'Sent',
            'trash'           => 'Trash',
            'setting'         => 'Setting',
            'total'           => 'Total',
            'send'            => 'Send',
            'back'            => 'Back',
            'discard'         => 'Discard',
            'from-'           => 'From - ',
            'to-'             => 'To - ',
            'cc-'             => 'Cc - ',
            'bcc-'            => 'Bcc - ',
            'reply'           => 'Reply',
            'reply-all'       => 'Reply All',
            'forward'         => 'Forward',
            'delete'          => 'Delete',
            'destroy-success' => 'Selected emails deleted successfully.',
            'save-to-draft'   => 'Save to Draft',
            'create-success'  => 'Success: Email sent successfully.',
            'update-success'  => 'Success: Email updated successfully.',
            'saved-to-draft'  => 'Success: Email saved to draft.',
            'delete-success'  => 'Success: Email deleted successfully.',
            'delete-failed'   => 'Error: Email can not be deleted.',
        ],

        'activities' => [
            'title'           => 'Activities',
            'create-success'  => 'Success: Activity created successfully.',
            'update-success'  => 'Success: Activity updated successfully.',
            'destroy-success' => 'Success: Activity deleted successfully.',
            'delete-failed'   => 'Error: Activity can not be deleted.',
        ],

        'products' => [
            'title'          => 'Products',
            'product'        => 'Product',
            'add-title'      => 'Add Product',
            'edit-title'     => 'Edit Product',
            'save-btn-title' => 'Save as Product',
            'back'           => 'Back',
            'cancel'         => 'Cancel',
            'create-success' => 'Product created successfully.',
            'update-success' => 'Product updated successfully.',
            'delete-success' => 'Product deleted successfully.',
            'delete-failed'  => 'Product can not be deleted.',
        ],

        'sessions' => [
            'login' => [
                'title'             => 'Login',
                'welcome'           => 'Welcome Back',
                'email'             => 'Email',
                'password'          => 'Password',
                'login'             => 'Login',
                'forgot-password'   => 'Forgot Password?',
                'login-error'       => 'Please check your credentials and try again.'
            ],

            'forgot-password' => [
                'title'                     => 'Forgot Password ?',
                'email'                     => 'Email',
                'send-reset-password-email' => 'Send Reset Password Email',
                'reset-link-sent'           => 'We have e-mailed your reset password link.',
                'email-not-exist'           => "We can not find a user with this e-mail address.",
                'back-to-login'             => 'Back to login'
            ],

            'reset-password' => [
                'title'             => 'Reset Password',
                'email'             => 'Email',
                'password'          => 'Password',
                'confirm-password'  => 'Confirm Password',
                'reset-password'    => 'Reset Password'
            ]
        ],

        'settings' => [
            'roles' => [
                'title'             => 'Roles',
                'role'              => 'Role',
                'edit_role'         => 'Edit Role',
                'description'       => 'Description',
                'create_role'       => 'Create Role',
                'permission_type'   => 'Permission type',
                'custom'            => 'Custom',
                'all'               => 'All',
                'save-btn-title'    => 'Save as Role',
                'update-btn-title'  => 'Update Role',
                'create-success'    => 'Role created successfully.',
                'update-success'    => 'Role updated successfully.',
                'delete-success'    => 'Role deleted successfully.',
                'delete-failed'     => 'Role can not be deleted.',
                'user-define-error' => 'Can not delete system role.',
                'being-used'        => 'Role can not be deleted, as this is being used in admin user.',
                'last-delete-error' => 'At least one role is required.'
            ],

            'users' => [
                'title'               => 'Users',
                'create_user'         => 'Create User',
                'edit_user'           => 'Edit User',
                'name'                => 'Name',
                'email'               => 'Email',
                'back'                => 'Back',
                'password'            => 'Password',
                'role'                => 'Role',
                'lead-view'           => 'Lead View',
                'global'              => 'Global',
                'individual'          => 'Individual',
                'status'              => 'Status',
                'save-btn-title'      => 'Save as User',
                'update-btn-title'    => 'Update User',
                'confirm_password'    => 'Confirm password',
                'create-success'      => 'User created successfully.',
                'update-success'      => 'User updated successfully.',
                'delete-success'      => 'User deleted successfully.',
                'delete-failed'       => 'User can not be deleted.',
                'user-define-error'   => 'Can not delete system user.',
                'last-delete-error'   => 'At least one user is required.',
                'user-define-error'   => 'Can not delete system user.',
                'mass-update-success' => 'Users updated successfully.',
                'mass-delete-success' => 'Users deleted successfully.',
            ],

            'attributes' => [
                'title'                 => 'Attributes',
                'attribute'             => 'Attribute',
                'add-title'             => 'Add Attribute',
                'edit-title'            => 'Edit Attribute',
                'save-btn-title'        => 'Save as Attribute',
                'back'                  => 'Back',
                'code'                  => 'Code',
                'name'                  => 'Name',
                'type'                  => 'Type',
                'text'                  => 'Text',
                'textarea'              => 'Textarea',
                'price'                 => 'Price',
                'boolean'               => 'Boolean',
                'select'                => 'Select',
                'multiselect'           => 'Multiselect',
                'email'                 => 'Email',
                'address'               => 'Address',
                'phone'                 => 'Phone',
                'datetime'              => 'Datetime',
                'date'                  => 'Date',
                'image'                 => 'Image',
                'file'                  => 'File',
                'lookup'                => 'Lookup',
                'entity_type'           => 'Entity type',
                'checkbox'              => 'Checkbox',
                'is_required'           => 'Is Required',
                'is_unique'             => 'Is Unique',
                'yes'                   => 'Yes',
                'no'                    => 'No',
                'input_validation'      => 'Input Validation',
                'number'                => 'Number',
                'decimal'               => 'Decimal',
                'email'                 => 'Email',
                'url'                   => 'Url',
                'options'               => 'Options',
                'sort-order'            => 'Sort Order',
                'add-option-btn-title'  => 'Add Option',
                'create-success'        => 'Attribute created successfully.',
                'update-success'        => 'Attribute updated successfully.',
                'update-error'          => 'Unable to update attribute.',
                'delete-success'        => 'Attribute deleted successfully.',
                'delete-failed'         => 'Attribute can not be deleted.',
                'user-define-error'     => 'Can not delete system attribute.'
            ],
        ],

        'configuration' => [
            'title'             => 'Configuration',
            'save-btn-title'    => 'Save',
            'general'           => 'General',
            'locale'            => 'Locale',
            'save-message'      => 'Configuration updated successfully!',
            "emails"            => [
                'email'                 => 'Email',
                'notification_label'    => 'Notifications',
                'new_lead'              => 'New lead',
            ]
        ],

        'datagrid' => [
            'id'                => 'Id',
            'name'              => 'Name',
            'code'              => 'Code',
            'sku'               => 'SKU',
            'type'              => 'Type',
            'price'             => 'Price',
            'email'             => 'Email',
            'from'              => 'From',
            'subject'           => 'Subject',
            'emails'            => 'Emails',
            'stage'             => 'Stage',
            'status'            => 'Status',
            'active'            => 'Active',
            'inactive'          => 'Inactive',
            'address'           => 'Address',
            'quantity'          => 'Quantity',
            'deal_amount'       => 'Deal Amount',
            'comment'           => 'Comment',
            'is_done'           => 'Is Done',
            'type'              => 'Type',
            'created_at'        => 'Created Date',
            'schedule_from'     => 'Schedule From',
            'schedule_to'       => 'Schedule To',
            'description'       => 'Description',
            'update_stage'      => 'Update stage',
            'contact_person'    => 'Contact Person',
            'contact_numbers'   => 'Contact numbers',
            'permission_type'   => 'Permission type',
            'organization_name' => 'Organization name',
            'update-success'    => ':resource updated successfully.',
            'destroy-success'   => ':resource deleted successfully.',
            'destroy-failed'    => ':resource can not be deleted.',
        ],

        'response' => [
            'create-success' => 'Success: :name created successfully.',
            'update-success' => 'Success: :name updated successfully.',
            'destroy-success'=> 'Success: :name deleted successfully.',
            'destroy-failed' => 'Error: :name can not be deleted.',
        ],

        'acl' => [
            'leads'         => 'Leads',
            'mail'          => 'Mail',
            'activities'    => 'Activities',
            'contacts'      => 'Contacts',
            'persons'       => 'Persons',
            'organizations' => 'Organizations',
            'products'      => 'Products',
            'settings'      => 'Settings',
            'users'         => 'Users',
            'roles'         => 'Roles',
            'create'        => 'Create',
            'edit'          => 'Edit',
            'view'          => 'View',
            'delete'        => 'Delete',
        ],

        'common' => [
            'back'               => 'Back',
            'address'            => 'Address',
            'country'            => 'Country',
            'select-country'     => 'Please select country',
            'state'              => 'State',
            'select-state'       => 'Please select state',
            'city'               => 'City',
            'postcode'           => 'Postcode',
            'address-validation' => 'The "Address" field is required',
            'work'               => 'Work',
            'home'               => 'Home',
            'no-result-found'    => 'Records not found with same name.',
            'add-as'             => 'Add as new',
            'not-available'      => 'Not Available',
            'yes'                => 'Yes',
            'no'                 => 'No',
            'delete'             => 'Delete',
            'save'               => 'Save',
            'add-as'             => 'Add as new'
        ],

        'user' => [
            'account' => [
                'name'              => 'Name',
                'email'             => 'Email',
                'password'          => 'Password',
                'my_account'        => 'My account',
                'update_details'    => 'Update Details',
                'current_password'  => 'Current password',
                'confirm_password'  => 'Confirm password',
                'password-match'    => 'Current password does not match.',
                'account-save'      => 'Account changes saved successfully.',
            ]
        ]
    ];
?>