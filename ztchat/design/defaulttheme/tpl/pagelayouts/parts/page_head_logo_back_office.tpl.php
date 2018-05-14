<style>
    a.navbar-brand.header-logo {
    height: 74px;
}
</style>
<a class="navbar-brand header-logo" href="<?php echo erLhcoreClassDesign::baseurl()?>" title="<?php echo htmlspecialchars(erLhcoreClassModelChatConfig::fetch('customer_company_name')->current_value)?>"><img class="img-responsive" src="<?php echo erLhcoreClassDesign::design('images/general/logo.png');?>" alt="<?php echo htmlspecialchars(erLhcoreClassModelChatConfig::fetch('customer_company_name')->current_value)?>" title="<?php echo htmlspecialchars(erLhcoreClassModelChatConfig::fetch('customer_company_name')->current_value)?>"></a>