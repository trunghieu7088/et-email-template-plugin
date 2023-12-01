<?php
add_filter('ae_get_mail_header', 'et_email_template_header');
function et_email_template_header()
{
    $site_title=carbon_get_theme_option( 'et_email_template_site_title' );    
    $site_logo=carbon_get_theme_option( 'custom_site_logo' );
    
    $email_link_color=carbon_get_theme_option( 'et_email_link_color' );
    $email_text_color=carbon_get_theme_option( 'et_email_text_color' );

    $email_header_text_color=carbon_get_theme_option( 'et_email_header_background_color' );
    $email_header_background_color=carbon_get_theme_option( 'et_email_header_background_color' );
    
    $email_content_background_color=carbon_get_theme_option( 'et_email_content_background_color' );
    
    $custom_email_template_header='<!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="x-apple-disable-message-reformatting">      
      <style>
      .email-content a
      {               
        color:'.$email_link_color.';
        text-decoration: none;
        margin:5px 0px;
      }
      </style>
    </head>
    <body style="margin: 0px auto; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <div style="margin: 0px auto; width:600px;">   

    <table width="100%" cellspacing="0" cellpadding="0" style="color:'.$email_header_text_color.';background-color: '.$email_header_background_color.';margin:0 auto;">
        <tr>
            <td style="padding:5px 20px 0px 20px; text-align: center;">     
            <img style="width:60px;height:60px;" src="'.$site_logo.'">     
            <h2 style="color:#ffffff;line-height:0px;">'.$site_title.'</h2>
            </td>
        </tr>        
    </table>
    
      <table width="100%" cellspacing="0" cellpadding="0" style="color:'.$email_text_color.';background-color: '.$email_content_background_color.';margin:0 auto;">
        <tr>
          <td style="padding: 5px 20px; text-align: left;" class="email-content">
             <p style="font-size: 16px; color: '.$email_text_color.';">';
    
    return $custom_email_template_header;
}

add_filter('ae_get_mail_footer','et_email_template_footer');

function et_email_template_footer()
{
    $footer_headline=carbon_get_theme_option( 'et_email_template_headline_footer' );
    $footer_second_headline=carbon_get_theme_option( 'et_email_template_second_headline_footer' );
    $facebook_link=carbon_get_theme_option( 'et_email_template_facebook_link' );
    $youtube_link=carbon_get_theme_option( 'et_email_template_youtube_link' );
    $instagram_link=carbon_get_theme_option( 'et_email_template_instagram_link' );
   
    $email_link_color=carbon_get_theme_option( 'et_email_link_color' );
    
    $email_footer_background_color=carbon_get_theme_option( 'et_email_footer_background_color' );
    $email_footer_text_color=carbon_get_theme_option( 'et_email_footer_text_color' );
    $email_footer_link_color=carbon_get_theme_option( 'et_email_footer_link_color' );
    
    $custom_email_template_footer='</p>
        </td>
    </tr>
    </table>

    <table width="100%" cellspacing="0" cellpadding="0" style="color:'.$email_footer_text_color.';background-color: '.$email_footer_background_color.';margin:0 auto;">
    <tr>
        <td style="padding: 0px 10px 0px 10px; text-align: center;">
        <p style="font-size:18px;line-height:15px;">'.$footer_headline.'</h2>
        <p style="font-size: 14px;line-height:15px;">'.$footer_second_headline.'</p>
        <a href="'.$facebook_link.'" style="color:'.$email_footer_link_color.';text-decoration: none;  margin-right: 10px;">Facebook</a>
        <a href="'.$instagram_link.'" style="color:'.$email_footer_link_color.';text-decoration: none; margin-right: 10px;">Instagram</a>
        <a href="'.$youtube_link.'" style="color:'.$email_footer_link_color.';text-decoration: none;">YouTube</a>
        </td>
    </tr>
    </table>
    </div>
    </body>
    </html>';
    return $custom_email_template_footer;
}