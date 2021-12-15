<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
      <title>HS LinkTree</title>
   <link rel="stylesheet" href="main.css">

      <?php
         if (isset($_GET['hubid'])) {
           $hubid = $_GET['hubid'];
         } else {
           $hubid = 8508105;
         }
         
         ?>
   </head>
   <body>
<div id= "outer-container">
   <div id= "inner-container">

      <header id = "main-header">
         <h4>Please enter the Hub Id in the form below and submit. If no hubid is entered, by default this will take you to my test portal.</h4>
      </header>
<div id= "main-form">
<form action="https://hs-link-tree.herokuapp.com/" method="_GET">
         <input type='text' name="hubid" value=''>
         <button type="submit">Submit</button>
      </form>  
</div>
      
      
<table>
         <thead>
            <tr>
               <th>Name</th>
               <th>Links</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/reports-dashboard/<?php echo $hubid ?>"> Main dash / Home </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/reports-dashboard/<?php echo $hubid ?>"> https://app.hubspot.com/reports-dashboard/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <h4> Developer </h4></td>
               <td></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/design-manager/<?php echo $hubid ?>"> Design Manager </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/design-manager/<?php echo $hubid ?>"> https://app.hubspot.com/design-manager/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/content/<?php echo $hubid ?>/staging/"> Content Staging </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/content/<?php echo $hubid ?>/staging/"> https://app.hubspot.com/content/<?php echo $hubid ?>/staging/ </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/pages/<?php echo $hubid ?>/manage/site/domain/all/listing/all"> Website Pages </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/pages/<?php echo $hubid ?>/manage/site/domain/all/listing/all"> https://app.hubspot.com/pages/<?php echo $hubid ?>/manage/site/domain/all/listing/all </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/hubdb/<?php echo $hubid ?>"> HubDB </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/hubdb/<?php echo $hubid ?>"> https://app.hubspot.com/hubdb/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/file-manager-beta/<?php echo $hubid ?>"> File Manager </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/file-manager-beta/<?php echo $hubid ?>"> https://app.hubspot.com/file-manager-beta/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/website/navigation"> Advanced Menus </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/website/navigation"> https://app.hubspot.com/settings/<?php echo $hubid ?>/website/navigation </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/website/pages/all-domains/page-templates"> Content Settings </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/website/pages/all-domains/page-templates"> https://app.hubspot.com/settings/<?php echo $hubid ?>/website/pages/all-domains/page-templates </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/domains/<?php echo $hubid ?>/url-redirects"> URL Redirects </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/domains/<?php echo $hubid ?>/url-redirects"> https://app.hubspot.com/domains/<?php echo $hubid ?>/url-redirects </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/marketplace/<?php echo $hubid ?>/products"> Marketplace </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/marketplace/<?php echo $hubid ?>/products"> https://app.hubspot.com/marketplace/<?php echo $hubid ?>/products </a></td>
            </tr>
            <tr>
               <td> <h4> Contacts </h4></td>
               <td></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/contacts/<?php echo $hubid ?>/contacts"> Contacts </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/contacts/<?php echo $hubid ?>/contacts"> https://app.hubspot.com/contacts/<?php echo $hubid ?>/contacts </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/contacts/<?php echo $hubid ?>/companies"> Companies </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/contacts/<?php echo $hubid ?>/companies"> https://app.hubspot.com/contacts/<?php echo $hubid ?>/companies </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/contacts/<?php echo $hubid ?>/objects/0-48/views/all/list"> Calls </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/contacts/<?php echo $hubid ?>/objects/0-48/views/all/list"> https://app.hubspot.com/contacts/<?php echo $hubid ?>/objects/0-48/views/all/list </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/target-accounts/<?php echo $hubid ?>"> Target Accounts </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/target-accounts/<?php echo $hubid ?>"> https://app.hubspot.com/target-accounts/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/activity-feed/<?php echo $hubid ?>"> Activity Feed </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/activity-feed/<?php echo $hubid ?>"> https://app.hubspot.com/activity-feed/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/contacts/<?php echo $hubid ?>/objectLists"> Lists </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/contacts/<?php echo $hubid ?>/objectLists"> https://app.hubspot.com/contacts/<?php echo $hubid ?>/objectLists </a></td>
            </tr>
            <tr>
               <td> <h4> Conversations </h4></td>
               <td></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/live-messages/<?php echo $hubid ?>"> Inbox </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/live-messages/<?php echo $hubid ?>"> https://app.hubspot.com/live-messages/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/chatflows/<?php echo $hubid ?>"> Chatflows </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/chatflows/<?php echo $hubid ?>"> https://app.hubspot.com/chatflows/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/snippets/<?php echo $hubid ?>"> Snippets </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/snippets/<?php echo $hubid ?>"> https://app.hubspot.com/snippets/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/templates/<?php echo $hubid ?>"> Templates </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/templates/<?php echo $hubid ?>"> https://app.hubspot.com/templates/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/user-preferences/<?php echo $hubid ?>/profile?isDestination=false"> Marketing </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/user-preferences/<?php echo $hubid ?>/profile?isDestination=false"> https://app.hubspot.com/user-preferences/<?php echo $hubid ?>/profile?isDestination=false </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/ads/<?php echo $hubid ?>"> Ads </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/ads/<?php echo $hubid ?>"> https://app.hubspot.com/ads/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/email/<?php echo $hubid ?>/manage"> Email </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/email/<?php echo $hubid ?>/manage"> https://app.hubspot.com/email/<?php echo $hubid ?>/manage </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/website/<?php echo $hubid ?>/pages/landing"> Landing Pages </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/website/<?php echo $hubid ?>/pages/landing"> https://app.hubspot.com/website/<?php echo $hubid ?>/pages/landing </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/social/<?php echo $hubid ?>"> Social </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/social/<?php echo $hubid ?>"> https://app.hubspot.com/social/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <h4> Website </h4></td>
               <td></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/website/<?php echo $hubid ?>/pages/site"> Website Pages </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/website/<?php echo $hubid ?>/pages/site"> https://app.hubspot.com/website/<?php echo $hubid ?>/pages/site </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/website/<?php echo $hubid ?>/blog"> Blog </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/website/<?php echo $hubid ?>/blog"> https://app.hubspot.com/website/<?php echo $hubid ?>/blog </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/content-strategy/<?php echo $hubid ?>"> SEO </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/content-strategy/<?php echo $hubid ?>"> https://app.hubspot.com/content-strategy/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/marketing/<?php echo $hubid ?>/campaigns"> Campaigns </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/marketing/<?php echo $hubid ?>/campaigns"> https://app.hubspot.com/marketing/<?php echo $hubid ?>/campaigns </a></td>
            </tr>
            <tr>
               <td> <h4> Files and Templates </h4></td>
               <td><a target="_blank" href="https://app.hubspot.com/user-preferences/<?php echo $hubid ?>/profile?eschref=%2Freports-dashboard%2F<?php echo $hubid ?>%2Fview%2F7989503#?isDestination=false"> https://app.hubspot.com/user-preferences/<?php echo $hubid ?>/profile?eschref=%2Freports-dashboard%2F<?php echo $hubid ?>%2Fview%2F7989503#?isDestination=false </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/design-manager/<?php echo $hubid ?>"> Design Tools </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/design-manager/<?php echo $hubid ?>"> https://app.hubspot.com/design-manager/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/files/<?php echo $hubid ?>"> Files </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/files/<?php echo $hubid ?>"> https://app.hubspot.com/files/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/hubdb/<?php echo $hubid ?>"> HubDB </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/hubdb/<?php echo $hubid ?>"> https://app.hubspot.com/hubdb/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <h4> Lead Capture </h4></td>
               <td></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/ctas/<?php echo $hubid ?>"> CTAs </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/ctas/<?php echo $hubid ?>"> https://app.hubspot.com/ctas/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/forms/<?php echo $hubid ?>"> Forms </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/forms/<?php echo $hubid ?>"> https://app.hubspot.com/forms/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <h4> Sales </h4></td>
               <td></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/contacts/<?php echo $hubid ?>/deals"> Deals </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/contacts/<?php echo $hubid ?>/deals"> https://app.hubspot.com/contacts/<?php echo $hubid ?>/deals </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/forecasting/<?php echo $hubid ?>"> Forecast </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/forecasting/<?php echo $hubid ?>"> https://app.hubspot.com/forecasting/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/tasks/<?php echo $hubid ?>"> Tasks </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/tasks/<?php echo $hubid ?>"> https://app.hubspot.com/tasks/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/documents/<?php echo $hubid ?>"> Documents </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/documents/<?php echo $hubid ?>"> https://app.hubspot.com/documents/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/meetings/<?php echo $hubid ?>"> Meetings </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/meetings/<?php echo $hubid ?>"> https://app.hubspot.com/meetings/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/playbooks/<?php echo $hubid ?>"> Playbooks </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/playbooks/<?php echo $hubid ?>"> https://app.hubspot.com/playbooks/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/quotes/<?php echo $hubid ?>"> Quotes </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/quotes/<?php echo $hubid ?>"> https://app.hubspot.com/quotes/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <h4> Service </h4></td>
               <td></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/contacts/<?php echo $hubid ?>/tickets"> Tickets </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/contacts/<?php echo $hubid ?>/tickets"> https://app.hubspot.com/contacts/<?php echo $hubid ?>/tickets </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/feedback/<?php echo $hubid ?>"> Feedback Surveys </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/feedback/<?php echo $hubid ?>"> https://app.hubspot.com/feedback/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/knowledge/<?php echo $hubid ?>"> Knowledge Base </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/knowledge/<?php echo $hubid ?>"> https://app.hubspot.com/knowledge/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/customer-portal/general?isBeta=true"> Customer Portal Beta </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/customer-portal/general?isBeta=true"> https://app.hubspot.com/settings/<?php echo $hubid ?>/customer-portal/general?isBeta=true </a></td>
            </tr>
            <tr>
               <td> <h4> Automation </h4></td>
               <td></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/sequences/<?php echo $hubid ?>"> Sequences </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/sequences/<?php echo $hubid ?>"> https://app.hubspot.com/sequences/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/workflows/<?php echo $hubid ?>"> Workflows </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/workflows/<?php echo $hubid ?>"> https://app.hubspot.com/workflows/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <h4> Reports </h4></td>
               <td></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/analytics/<?php echo $hubid ?>/tools"> Analytics Tools </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/analytics/<?php echo $hubid ?>/tools"> https://app.hubspot.com/analytics/<?php echo $hubid ?>/tools </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/reports-dashboard/<?php echo $hubid ?>"> Dashboards </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/reports-dashboard/<?php echo $hubid ?>"> https://app.hubspot.com/reports-dashboard/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/reports-list/<?php echo $hubid ?>"> Reports </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/reports-list/<?php echo $hubid ?>"> https://app.hubspot.com/reports-list/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/reporting-datasets/<?php echo $hubid ?>"> Datasets </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/reporting-datasets/<?php echo $hubid ?>"> https://app.hubspot.com/reporting-datasets/<?php echo $hubid ?> </a></td>
            </tr>

            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/ecosystem/<?php echo $hubid ?>/marketplace/apps"> App Marketplace Find apps to integrate with HubSpot </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/ecosystem/<?php echo $hubid ?>/marketplace/apps"> https://app.hubspot.com/ecosystem/<?php echo $hubid ?>/marketplace/apps </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/ecosystem/<?php echo $hubid ?>/marketplace/assets"> Asset Marketplace Find themes, modules, and templates </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/ecosystem/<?php echo $hubid ?>/marketplace/assets"> https://app.hubspot.com/ecosystem/<?php echo $hubid ?>/marketplace/assets </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/ecosystem/<?php echo $hubid ?>/marketplace/solutions">Solutions Directory Find your perfect service provider match </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/ecosystem/<?php echo $hubid ?>/marketplace/solutions"> https://app.hubspot.com/ecosystem/<?php echo $hubid ?>/marketplace/solutions </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/integrations-settings/<?php echo $hubid ?>/installed"> Connected apps </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/integrations-settings/<?php echo $hubid ?>/installed"> https://app.hubspot.com/integrations-settings/<?php echo $hubid ?>/installed </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/marketplace-settings/<?php echo $hubid ?>/downloads"> Marketplace downloads </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/marketplace-settings/<?php echo $hubid ?>/downloads"> https://app.hubspot.com/marketplace-settings/<?php echo $hubid ?>/downloads </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/account-dashboard/<?php echo $hubid ?>/"> Account & Billing </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/account-dashboard/<?php echo $hubid ?>/"> https://app.hubspot.com/account-dashboard/<?php echo $hubid ?>/ </a></td>
            </tr>
            <tr>
               <td> <h4>Settings </h4></td>
               <td></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/user-preferences/<?php echo $hubid ?>?eschref=%2Fuser-preferences%2F<?php echo $hubid ?>%2Fprofile"> Profile & Preferences </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/user-preferences/<?php echo $hubid ?>?eschref=%2Fuser-preferences%2F<?php echo $hubid ?>%2Fprofile"> https://app.hubspot.com/user-preferences/<?php echo $hubid ?>?eschref=%2Fuser-preferences%2F<?php echo $hubid ?>%2Fprofile </a></td>
            </tr>     
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences"> General </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences"> https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/notification-preferences/<?php echo $hubid ?>"> Notifications </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/notification-preferences/<?php echo $hubid ?>"> https://app.hubspot.com/notification-preferences/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/user-preferences/<?php echo $hubid ?>/security"> Security </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/user-preferences/<?php echo $hubid ?>/security"> https://app.hubspot.com/user-preferences/<?php echo $hubid ?>/security </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/account-defaults"> Account Defaults </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/account-defaults"> https://app.hubspot.com/settings/<?php echo $hubid ?>/account-defaults </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/users"> Users & Teams </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/users"> https://app.hubspot.com/settings/<?php echo $hubid ?>/users </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href=""> Integrations </a></td>
               <td><a target="_blank" href="">  </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/integrations-settings/<?php echo $hubid ?>/installed"> Connected Apps </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/integrations-settings/<?php echo $hubid ?>/installed"> https://app.hubspot.com/integrations-settings/<?php echo $hubid ?>/installed </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/private-apps/<?php echo $hubid ?>"> Private Apps </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/private-apps/<?php echo $hubid ?>"> https://app.hubspot.com/private-apps/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/integrations-settings/<?php echo $hubid ?>/marketable-contacts-settings"> Marketing Contacts </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/integrations-settings/<?php echo $hubid ?>/marketable-contacts-settings"> https://app.hubspot.com/integrations-settings/<?php echo $hubid ?>/marketable-contacts-settings </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/integrations-settings/<?php echo $hubid ?>/ecommerce"> Ecommerce </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/integrations-settings/<?php echo $hubid ?>/ecommerce"> https://app.hubspot.com/integrations-settings/<?php echo $hubid ?>/ecommerce </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/api-key/<?php echo $hubid ?>"> API Key </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/api-key/<?php echo $hubid ?>"> https://app.hubspot.com/api-key/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/marketing/email-service-provider"> Email Service Provider </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/marketing/email-service-provider"> https://app.hubspot.com/settings/<?php echo $hubid ?>/marketing/email-service-provider </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/marketplace-settings/<?php echo $hubid ?>/downloads"> Marketplace Downloads </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/marketplace-settings/<?php echo $hubid ?>/downloads"> https://app.hubspot.com/marketplace-settings/<?php echo $hubid ?>/downloads </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href=""> Tracking & Analytics </a></td>
               <td><a target="_blank" href="">  </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/analytics-and-tracking"> Tracking Code </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/analytics-and-tracking"> https://app.hubspot.com/settings/<?php echo $hubid ?>/analytics-and-tracking </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/attribution"> Attribution </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/attribution"> https://app.hubspot.com/settings/<?php echo $hubid ?>/attribution </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/goals"> Goals </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/goals"> https://app.hubspot.com/settings/<?php echo $hubid ?>/goals </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/tracking-urls"> Tracking URLs </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/tracking-urls"> https://app.hubspot.com/settings/<?php echo $hubid ?>/tracking-urls </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/data-privacy"> Privacy & Consent </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/data-privacy"> https://app.hubspot.com/settings/<?php echo $hubid ?>/data-privacy </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/sandboxes/<?php echo $hubid ?>"> Sandboxes </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/sandboxes/<?php echo $hubid ?>"> https://app.hubspot.com/sandboxes/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/business-units"> Business UnitsBeta </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/business-units"> https://app.hubspot.com/settings/<?php echo $hubid ?>/business-units </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/property-settings/<?php echo $hubid ?>"> Properties </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/property-settings/<?php echo $hubid ?>"> https://app.hubspot.com/property-settings/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href=""> Objects </a></td>
               <td><a target="_blank" href="">  </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/contacts"> Contacts </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/contacts"> https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/contacts </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/companies"> Companies </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/companies"> https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/companies </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/deals"> Deals </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/deals"> https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/deals </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/tickets"> Tickets </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/tickets"> https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/tickets </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/sales/products"> Products & Quotes </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/sales/products"> https://app.hubspot.com/settings/<?php echo $hubid ?>/sales/products </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/sales/forecasting"> Forecast </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/sales/forecasting"> https://app.hubspot.com/settings/<?php echo $hubid ?>/sales/forecasting </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/objects/activities"> Activities </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/objects/activities"> https://app.hubspot.com/settings/<?php echo $hubid ?>/objects/activities </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/object"> Custom Objects </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/object"> https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/object </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/importexport"> Import & Export </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/importexport"> https://app.hubspot.com/sales-products-settings/<?php echo $hubid ?>/importexport </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href=""> Inbox </a></td>
               <td><a target="_blank" href="">  </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/live-messages-settings/<?php echo $hubid ?>/inboxes"> Inboxes </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/live-messages-settings/<?php echo $hubid ?>/inboxes"> https://app.hubspot.com/live-messages-settings/<?php echo $hubid ?>/inboxes </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/live-messages-settings/<?php echo $hubid ?>/team-management"> Team Management </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/live-messages-settings/<?php echo $hubid ?>/team-management"> https://app.hubspot.com/live-messages-settings/<?php echo $hubid ?>/team-management </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/live-messages-settings/<?php echo $hubid ?>/allow-and-deny-list"> Allow & Deny List </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/live-messages-settings/<?php echo $hubid ?>/allow-and-deny-list"> https://app.hubspot.com/live-messages-settings/<?php echo $hubid ?>/allow-and-deny-list </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href=""> Marketing </a></td>
               <td><a target="_blank" href="">  </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/marketing/ads"> Ads </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/marketing/ads"> https://app.hubspot.com/settings/<?php echo $hubid ?>/marketing/ads </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/marketing/email"> Email </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/marketing/email"> https://app.hubspot.com/settings/<?php echo $hubid ?>/marketing/email </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/marketing/form"> Forms </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/marketing/form"> https://app.hubspot.com/settings/<?php echo $hubid ?>/marketing/form </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/social/<?php echo $hubid ?>/settings"> Social </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/social/<?php echo $hubid ?>/settings"> https://app.hubspot.com/social/<?php echo $hubid ?>/settings </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href=""> Website </a></td>
               <td><a target="_blank" href="">  </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/domains"> Domains & URLs </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/domains"> https://app.hubspot.com/settings/<?php echo $hubid ?>/domains </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/menus/<?php echo $hubid ?>/edit"> Navigation </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/menus/<?php echo $hubid ?>/edit"> https://app.hubspot.com/menus/<?php echo $hubid ?>/edit </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/website/themes"> Themes </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/website/themes"> https://app.hubspot.com/settings/<?php echo $hubid ?>/website/themes </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/website/blogs"> Blog </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/website/blogs"> https://app.hubspot.com/settings/<?php echo $hubid ?>/website/blogs </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/website/pages"> Pages </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/website/pages"> https://app.hubspot.com/settings/<?php echo $hubid ?>/website/pages </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/service-hub-settings/<?php echo $hubid ?>/knowledge"> Knowledge Base </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/service-hub-settings/<?php echo $hubid ?>/knowledge"> https://app.hubspot.com/service-hub-settings/<?php echo $hubid ?>/knowledge </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/content-membership"> Private Content </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/content-membership"> https://app.hubspot.com/settings/<?php echo $hubid ?>/content-membership </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/customer-portal"> Customer PortalBeta </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/customer-portal"> https://app.hubspot.com/settings/<?php echo $hubid ?>/customer-portal </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/profile"> Profile </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/profile"> https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/profile </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/email"> Email </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/email"> https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/email </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/calling"> Calling </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/calling"> https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/calling </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/calendar"> Calendar </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/calendar"> https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/calendar </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/tasks"> Tasks </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/tasks"> https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/tasks </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/profile"> Profile </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/profile"> https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/profile </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/email"> Email </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/email"> https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/email </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/calling"> Calling </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/calling"> https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/calling </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/calendar"> Calendar </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/calendar"> https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/calendar </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/tasks"> Tasks </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/tasks"> https://app.hubspot.com/settings/<?php echo $hubid ?>/user-preferences/tasks </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://legal.hubspot.com/privacy-policy"> Privacy Policy </a></td>
               <td><a target="_blank" href="https://legal.hubspot.com/privacy-policy"> https://legal.hubspot.com/privacy-policy </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/academy/<?php echo $hubid ?>?LC004=Control"> HubSpot Academy </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/academy/<?php echo $hubid ?>?LC004=Control"> https://app.hubspot.com/academy/<?php echo $hubid ?>?LC004=Control </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/pricing/<?php echo $hubid ?>?upgradeSource=nav-dropdown"> Pricing & Features </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/pricing/<?php echo $hubid ?>?upgradeSource=nav-dropdown"> https://app.hubspot.com/pricing/<?php echo $hubid ?>?upgradeSource=nav-dropdown </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/whats-new/<?php echo $hubid ?>"> Product Updates </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/whats-new/<?php echo $hubid ?>"> https://app.hubspot.com/whats-new/<?php echo $hubid ?> </a></td>
            </tr>
            <tr>
               <td> <a target="_blank" href="https://app.hubspot.com/projects/<?php echo $hubid ?>"> Projects </a></td>
               <td><a target="_blank" href="https://app.hubspot.com/projects/<?php echo $hubid ?>"> https://app.hubspot.com/projects/<?php echo $hubid ?> </a></td>
            </tr>
         </tbody>
      </table>
      <h3> please slack Adeel Sadiq (@binky) if you need any help with this or if you have any questions </h3>
      </div>

      </div>
    </body>
</html>