<?php
class ModelLocalisationZone extends Model {
	public function getZone($zone_id) {
		/* NEOSEO NovaPoshta BEGIN */
		if($this->config->get('neoseo_novaposhta_status') == 1){
			$this->load->model('extension/shipping/neoseo_novaposhta');
			return $this->model_extension_shipping_neoseo_novaposhta->getZone($zone_id);
		}
		/* NEOSEO NovaPoshta END */
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE zone_id = '" . (int)$zone_id . "' AND status = '1'");

		return $query->row;
	}

	public function getZonesByCountryId($country_id) {
		/* NEOSEO NovaPoshta BEGIN */
		if($this->config->get('neoseo_novaposhta_status') == 1){
			$this->load->model('localisation/country');
			$country = $this->model_localisation_country->getCountry($country_id);
			if(isset($country['iso_code_3']) && $country['iso_code_3'] == 'UKR'){
				$this->load->model('extension/shipping/neoseo_novaposhta');
				return $this->model_extension_shipping_neoseo_novaposhta->getZones($country_id);
			}
		}
		/* NEOSEO NovaPoshta END */
		$zone_data = $this->cache->get('zone.' . (int)$country_id);

		if (!$zone_data) {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE country_id = '" . (int)$country_id . "' AND status = '1' ORDER BY name");

			$zone_data = $query->rows;

			$this->cache->set('zone.' . (int)$country_id, $zone_data);
		}

		return $zone_data;
	}
}