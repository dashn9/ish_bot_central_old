<?php
$url_mains = ["https://www.finnsec.us/2023/06/30/thriving-in-times-of-recession-strategies-for-financial-stability-and-growth/",
"https://www.finnsec.us/2023/06/30/7-essential-financial-habits-for-building-long-term-wealth/"
];
$old_urls = [
    "https://www.finnsec.us/2023/06/22/navigating-volatile-markets-strategies-for-successful-financial-planning/",
    "https://www.finnsec.us/2023/06/19/7-essential-financial-habit-for-a-prosperous-future/",
    "https://www.finnsec.us/2023/04/02/changing-your-money-mindset-tips-for-improving-your-financial-well-being/",
    "https://www.finnsec.us/2023/04/02/financial-institutions-the-backbone-of-the-global-economy/",
    "https://www.finnsec.us/2023/03/31/how-nfts-are-revolutionizing-the-art-world-and-changing-the-investment-landscape/",
    "https://www.finnsec.us/2023/03/30/entrepreneurship-the-path-to-success/",
    "https://www.finnsec.us/2023/03/30/the-ins-and-outs-of-credit-cards-a-comprehensive-guide/",
    "https://www.finnsec.us/2023/03/28/the-gig-economy-a-new-era-of-work-or-a-threat-to-traditional-employment/",
    "https://www.finnsec.us/2023/03/24/the-impact-of-inflation-on-the-economy-understanding-the-basics/",
    "https://www.finnsec.us/2023/03/24/the-rise-of-impact-investing-making-money-while-making-a-difference/",
    "https://www.finnsec.us/2023/03/21/navigating-the-world-of-cryptocurrencies-risks-rewards-and-what-you-need-to-know/",
    "https://www.finnsec.us/2023/03/21/investing-in-sustainable-and-ethical-companies-a-win-win-for-your-wallet-and-the-planet/",
    "https://www.finnsec.us/2023/03/17/navigating-market-volatility-tips-for-managing-your-investments-in-turbulent-times/",
    "https://www.finnsec.us/2023/03/17/investing-in-alternative-assets-how-to-diversify-your-portfolio/",
    "https://www.finnsec.us/2023/03/05/the-psychology-of-spending-how-our-emotions-influence-our-financial-decisions/",
    "https://www.finnsec.us/2023/03/03/investment-strategies-choosing-the-right-approach-for-your-financial-goals/",
    "https://www.finnsec.us/2022/10/14/beyond-the-basics-advanced-financial-tips-for-achieving-your-goal/",
    "https://www.finnsec.us/2022/10/14/10-essential-financial-tips-for-building-wealth-and-achieving-your-goals/",
    "https://www.finnsec.us/2022/10/11/money-currency-tick-tock-explained/",
    "https://www.finnsec.us/2022/10/10/curious-to-learn-how-an-economy-works-learn-it-simplified/",
    "https://www.finnsec.us/2022/10/10/strong-indicators-of-a-great-stock/",
    "https://www.finnsec.us/2022/10/09/yes-its-real-how-to-overcome-fear-of-money/",
    "https://www.finnsec.us/2022/10/09/the-best-way-to-think-about-money/",
    "https://www.finnsec.us/2022/10/08/dont-wait-to-be-a-victim-of-credit-card-fraud-learn-how-to-protect-yourself-now/",
    "https://www.finnsec.us/2022/10/08/the-relational-differences-between-credit-union-and-banks/",
    "https://www.finnsec.us/2022/10/07/staying-away-from-bad-investments/",
    "https://www.finnsec.us/2022/10/07/traits-you-need-as-an-entrepreneur-to-become-successful/",
    "https://www.finnsec.us/2022/09/25/tips-to-staying-afloat-during-recession/",
    "https://www.finnsec.us/2022/09/24/8-things-you-need-to-put-into-processes-before-making-investments/"];
$url_exts = [];
$active_url_to_use =
    ["page_url" => "https://www.finnsec.us/2022/10/10/strong-indicators-of-a-great-stock/",
        "page_content_element_type" => "id", "page_content_element_name" => "main",
        "related_articles_elements_type" => "class", "related_articles_elements_name" => "nav-links",
        "page_clicks" => rand(3, 5), "vignette_close_ad_elements_type" => "xpath", "vignette_close_ad_elements_name" => "//iframe//span[text() = 'Close']", "vignette_open_ad_elements_type" => "xpath", "vignette_open_ad_elements_name" => "//iframe//span[count(ancestor::div) = 5]", "in_page_ad_link_elements_type" => "xpath", "in_page_ad_link_elements_name" => "//iframe//div[@style=\"display: flex !important;\"]",
        "maximum_no_of_ads" => 2, "proxy_domain_whitelists" => ["whouseem.com", "gloaphoo.net", "dudialgator.com", "highrevenuegate.com", "bedrapiona.com", "fleraprt.com", "gggtrenks.com", "x2tsa.com", "poufaini.com", "maltrk.com", "trknex.com"]];
/*
$preset_users_for_today = rand(44000, 55114);
$preset_determined_page_views_for_today = rand(81000, 90000);
$preset_percentage_of_sessions_for_today = rand(18, 32);
$preset_sessions_for_today = $preset_users_for_today + round($preset_users_for_today * $preset_percentage_of_sessions_for_today / 100);
$chances_of_user_reuse = 100 - round($preset_users_for_today * 100 / $preset_sessions_for_today, 2);
$page_depth = 100 - round($preset_sessions_for_today * 100 / $preset_determined_page_views_for_today, 2);

echo $preset_users_for_today." ".$preset_sessions_for_today." ".$page_depth." ".$preset_determined_page_views_for_today." ".$chances_of_user_reuse;
*/
$amount = 1;
if(isset($_GET["amount"])) {
    $amount = $_GET["amount"];
    if($amount == "rand") {
        $url_details = [];
        for($i=0; $i<count($url_mains); $i++) {
            $active_url_to_use["page_url"] = $url_mains[$i];
            if(rand(0, 100) < 40) {
                if(rand(0, 100) <= 60) {
                    $active_url_to_use["page_url"] = $old_urls[rand(0, floor((count($old_urls) / 4) - 1))];
                }
                else {
                    $active_url_to_use["page_url"] = $old_urls[rand(floor((count($old_urls) / 4)), count($old_urls) - 1)];
                }
            }
            array_push($url_details, $active_url_to_use);
        }
        echo json_encode($url_details[rand(0, count($url_details) - 1)]);
        exit();
    }
    (int) $amount;
    if($amount < 1 || $amount > count($url_mains)) {
        $amount = 1;
    }
}
$url_details = [];
for($i=0; $i<$amount; $i++) {
    $active_url_to_use["page_url"] = $url_mains[$i];
    array_push($url_details, $active_url_to_use);
}
echo json_encode($url_details);