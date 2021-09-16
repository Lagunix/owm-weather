<?php
/****************************************************************************/
/* DO NOT CHANGE THIS TEMPLATE DIRECTLY. IT WILL BE OVERWRITTEN BY UPDATES. */
/****************************************************************************/
/**
 * The OWM Weather card1 template
 *
 */
?>
<!-- Start #owm-weather styles -->
<style>
#<?php echo esc_attr($owmw_html["main_weather_div"]) ?> {
    width: 100%;
}
#<?php echo esc_attr($owmw_html["container_weather_div"]) ?> {
	width: auto;
}
#<?php echo esc_attr($owmw_html["main_weather_div"]) ?> .owmw-current-infos {
    white-space: nowrap;
}
#<?php echo esc_attr($owmw_html["main_weather_div"]) ?> .owmw-infos-text {
    line-height: 1.5;
    margin-top: 20px;
    text-align: left;
}
#<?php echo esc_attr($owmw_html["main_weather_div"]) ?> .owmw-infos-text span.owmw-value,
#<?php echo esc_attr($owmw_html["main_weather_div"]) ?> .owmw-temperature {
    font-size: 125%;
    font-weight: 700;
}
#<?php echo esc_attr($owmw_html["main_weather_div"]) ?> .owmw-infos-text svg {
    height: 28px;
    width: 29px;
}
#<?php echo esc_attr($owmw_html["main_weather_div"]) ?> .owmw-now .owmw-main-temperature {
    font-size: 36px;
}
#<?php echo esc_attr($owmw_html["main_weather_div"]) ?> .owmw-today .owmw-sun-hours,
#<?php echo esc_attr($owmw_html["main_weather_div"]) ?> .owmw-today .owmw-moon-hours {
    font-size: 12px;
}
#<?php echo esc_attr($owmw_html["main_weather_div"]) ?> .owmw-hours .card,
#<?php echo esc_attr($owmw_html["main_weather_div"]) ?> .owmw-forecast .card {
    margin: 0 !important;
}
</style>
<!-- Start #owm-weather -->
<?php echo wp_kses_post($owmw_html["container"]["start"]); ?>

<?php
    if ($owmw_opt["wind"] =='yes' || $owmw_opt["humidity"] =='yes' || $owmw_opt["dew_point"] =='yes' || $owmw_opt["pressure"] =='yes' || $owmw_opt["cloudiness"] =='yes' || $owmw_opt["precipitation"] =='yes' || $owmw_opt["visibility"] =='yes' || $owmw_opt["uv_index"] =='yes') {
        $left_classes = "col-md-6 col-5";
    } else {
        $left_classes = "col";
    }
?>

    <div class="row">
        <div class="<?php echo esc_attr($left_classes); ?>">

        	<!-- Current weather -->
        	<?php echo wp_kses_post($owmw_html["now"]["start"]); ?>
        		<?php echo wp_kses_post($owmw_html["now"]["location_name"]); ?>
        		<?php echo wp_kses($owmw_html["now"]["symbol"], $owmw_opt['allowed_html']); ?>
        		<?php echo wp_kses_post($owmw_html["now"]["temperature"]); ?>
        		<?php echo wp_kses_post($owmw_html["now"]["feels_like"]); ?>
        		<?php echo wp_kses_post($owmw_html["now"]["weather_description"]); ?>
        	<?php echo wp_kses_post($owmw_html["now"]["end"]); ?>

        	<!-- Alert button -->
        	<?php echo wp_kses_post($owmw_html["alert_button"]); ?>

        </div>
	
        	<!-- Current infos: wind, humidity, pressure, cloudiness, precipitation -->
            <?php if ($owmw_opt["wind"] =='yes' || $owmw_opt["humidity"] =='yes' || $owmw_opt["dew_point"] =='yes' || $owmw_opt["pressure"] =='yes' || $owmw_opt["cloudiness"] =='yes' || $owmw_opt["precipitation"] =='yes' || $owmw_opt["visibility"] =='yes' || $owmw_opt["uv_index"] =='yes') { ?>
                <div class="owmw-current-infos col-md-6 col-7">
            	<?php echo '<p class="owmw-infos-text">'; ?>
            	<?php if ($owmw_opt["wind"] =='yes') echo wp_kses($owmw_html["svg"]["wind"], $owmw_opt['allowed_html']) . 'Wind: <span class="owmw-value">' . esc_html($owmw_data["wind_speed"]) . ' ' . esc_html($owmw_data["wind_direction"]) . '</span><br>'; ?>
            	<?php if ($owmw_opt["humidity"] =='yes') echo wp_kses($owmw_html["svg"]["humidity"], $owmw_opt['allowed_html']) .'Humidity: <span class="owmw-value">' . esc_html($owmw_data["humidity"]) . '</span><br>'; ?>
            	<?php if ($owmw_opt["dew_point"] =='yes') echo wp_kses($owmw_html["svg"]["dew_point"], $owmw_opt['allowed_html']) .'Dew Point: <span class="owmw-value owmw-temperature">' . esc_html($owmw_data["dew_point"]) . '</span><br>'; ?>
            	<?php if ($owmw_opt["pressure"] =='yes') echo wp_kses($owmw_html["svg"]["pressure"], $owmw_opt['allowed_html']) .'Pressure: <span class="owmw-value">' . esc_html($owmw_data["pressure"]) . '</span><br>'; ?>
            	<?php if ($owmw_opt["cloudiness"] =='yes') echo wp_kses($owmw_html["svg"]["cloudiness"], $owmw_opt['allowed_html']) .'Cloudiness: <span class="owmw-value">' . esc_html($owmw_data["cloudiness"]) . '</span><br>'; ?>
            	<?php if ($owmw_opt["precipitation"] =='yes') echo wp_kses($owmw_html["svg"]["precipitation"], $owmw_opt['allowed_html']) .'Precipitation: <span class="owmw-value">' . esc_html($owmw_data["precipitation_1h"]) . '</span><br>'; ?>
            	<?php if ($owmw_opt["visibility"] =='yes') echo wp_kses($owmw_html["svg"]["visibility"], $owmw_opt['allowed_html']) . 'Visibility: <span class="owmw-value">' . esc_html($owmw_data["visibility"]) . '</span><br>'; ?>
            	<?php if ($owmw_opt["uv_index"] =='yes') echo wp_kses($owmw_html["svg"]["uv_index"], $owmw_opt['allowed_html']) . 'UV Index: <span class="owmw-value">' . esc_html($owmw_data["uv_index"]) . '</span><br>'; ?>
            	<?php echo "</p>"; ?>
                </div>
            <?php } ?>

    </div>

	<!-- Today -->
	<?php echo wp_kses_post($owmw_html["today"]["start"]); ?>
		<?php echo wp_kses_post($owmw_html["today"]["day"]); ?>
		<?php echo wp_kses($owmw_html["today"]["sun"], $owmw_opt['allowed_html']); ?>
		<?php echo wp_kses($owmw_html["today"]["moon"], $owmw_opt['allowed_html']); ?>
	<?php echo wp_kses_post($owmw_html["today"]["end"]); ?>


	<?php if ($owmw_opt["hours_forecast_no"] > 0) { ?>
		<!-- Hourly Forecast -->
		<?php echo wp_kses_post($owmw_html["hour"]["start"]); ?>
		<?php
			for ($i = 0; $i < $owmw_opt["hours_forecast_no"]; $i++) {
			    if (isset($owmw_html["hour"]["info"][$i])) {
    				echo wp_kses_post($owmw_html["hour"]["info"][$i]);
    			    }
			}
		?>
		<?php echo wp_kses_post($owmw_html["hour"]["end"]); ?>
	<?php } ?>

	<?php if ($owmw_opt["days_forecast_no"] > 0) { ?>	
		<!-- Daily Forecast -->
		<?php echo wp_kses_post($owmw_html["forecast"]["start_card"]); ?>
			<?php
				for ($i = 0; $i < $owmw_opt["days_forecast_no"]; $i++) {
					echo wp_kses($owmw_html["forecast"]["info_card"][$i], $owmw_opt['allowed_html']);
				};
			?>	
		<?php echo wp_kses_post($owmw_html["forecast"]["end_card"]); ?>
	<?php } ?>

	<!-- Weather Map -->
	<?php echo wp_kses_post($owmw_html["map"]); ?>
	<?php echo '<script type="text/javascript">' . wp_kses_post($owmw_html["map_script"]) . '</script>'; ?>
	<?php echo wp_kses_post($owmw_html["owm_link_last_update_start"]); ?>

	<!-- OWM Link -->
	<?php echo wp_kses_post($owmw_html["owm_link"]); ?>
	<!-- OWM Last Update -->
	<?php echo wp_kses_post($owmw_html["last_update"]); ?>
	<?php echo wp_kses_post($owmw_html["owm_link_last_update_end"]); ?>

	<!-- Alert Modals -->
	<?php echo wp_kses_post($owmw_html["alert_modal"]); ?>

	<!-- CSS/Scripts -->
	<?php echo '<style type="text/css">' . wp_kses_post($owmw_html["custom_css"]) . '</style>'; ?>
	<?php echo '<style type="text/css">' . wp_kses_post($owmw_html["temperature_unit"]) . '</style>'; ?>

	<!-- Google Tag Manager -->
	<?php echo '<script type="text/javascript">' . wp_kses_post($owmw_html["gtag"]) . '</script>'; ?>

<!-- End #owm-weather -->
<?php echo wp_kses_post($owmw_html["container"]["end"]); ?>