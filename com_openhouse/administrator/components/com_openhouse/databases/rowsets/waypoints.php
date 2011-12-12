<?php

class ComOpenhouseDatabaseRowsetWaypoints extends KDatabaseRowsetDefault
{
	
	public function getDirectionsUrl($zoom = 12)
	{
		if ($this->count() === 0) {
			return;
		}
		
		$this->rewind();
		$url = "http://maps.google.com/maps?";
		$map['saddr'] = $this->current()->house->getFullAddress();
		$map['z'] = $zoom;
		$map['hl'] = 'en';
		$map['t'] = 'm';
		if ($this->count() > 1) {
			while($this->next()) {
				$to[] = $this->current()->house->getFullAddress();
			}
			$map['daddr'] = implode(' to:', $to);
		}
		
		return $url . http_build_query($map);
	}
	
	public function getPoserSrc($width = 192, $height = 193, $zoom = 12)
	{
		if ($this->count() === 0) {
			return;
		}
		
		$this->rewind();
		$url = "http://maps.googleapis.com/maps/api/staticmap?";
		$poser['center'] = $this->current()->house->getFullAddress();
		$poser['zoom'] = $zoom;
		$poser['size'] = "{$width}x{$height}";
		$poser['sensor'] = 'false';
		
		if ($this->count() > 1) {
			do {
				$markers .= '&markers=color:0xff624f|'. $this->current()->house->getFullAddress();
			} while($this->next());
		}
		
		return $url . http_build_query($poser) .$markers;
	}
	
}