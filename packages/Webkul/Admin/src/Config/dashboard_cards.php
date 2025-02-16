<?php

return [
    [
        "selected"      => true,
        "card_id"       => "leads",
        "sort"          => 1,
        "card_type"     => "bar_chart",
        "label"         => 'admin::app.dashboard.leads_over_time',
        // "class_name"    => "Webkul\Admin\Helpers\DashboardHelper",
        // "method_name"   => "getLeads",
    ], [
        "selected"      => true,
        "card_id"       => "leads_started",
        "sort"          => 2,
        "card_type"     => "line_chart",
        "label"         => 'admin::app.dashboard.leads_started',
    ], [
        "selected"      => true,
        "card_id"       => "activities",
        "sort"          => 4,
        "card_type"     => "activities",
        "label"         => 'admin::app.dashboard.activities',
    ], [
        "selected"      => true,
        "card_id"       => "top_leads",
        "sort"          => 3,
        "card_type"     => "top_card",
        "label"         => 'admin::app.dashboard.top_leads',
    ], [
        "selected"      => true,
        "card_id"       => "stages",
        "sort"          => 5,
        "card_type"     => "stages_bar",
        "label"         => 'admin::app.dashboard.stages',
    ], [
        "selected"      => true,
        "card_id"       => "emails",
        "sort"          => 6,
        "card_type"     => "emails",
        "label"         => 'admin::app.dashboard.emails',
    ], [
        "selected"      => true,
        "card_id"       => "customers",
        "sort"          => 7,
        "card_type"     => "line_chart",
        "label"         => 'admin::app.dashboard.customers',
    ], [
        "selected"      => true,
        "card_id"       => "top_customers",
        "sort"          => 8,
        "card_type"     => "emails",
        "label"         => 'admin::app.dashboard.top_customers',
    ], [
        "selected"      => true,
        "card_id"       => "products",
        "sort"          => 9,
        "card_type"     => "line_chart",
        "label"         => 'admin::app.dashboard.products',
    ], [
        "selected"      => true,
        "card_id"       => "top_products",
        "sort"          => 10,
        "card_type"     => "emails",
        "label"         => 'admin::app.dashboard.top_products',
    ], [
        "sort"          => 1,
        "card_type"     => "custom_card",
        "card_border"   => "dashed",
        "selected"      => false,
    ]
];

?>