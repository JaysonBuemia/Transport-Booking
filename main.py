import googlemaps
from datetime import datetime

gmaps = googlemaps.Client(key='')

geocode_result = gmaps.geocode('')

reverse_geocode_result = gmaps.reverse_geocode(())

now = datetime.now()
directions_result = gmaps.directions("","",mode="transit",departure_time=now)

addressvalidation_result =  gmaps.addressvalidation([''], regionCode='',locality='', enableUspsCass=True)

address_descriptor_result = gmaps.reverse_geocode((), enable_address_descriptor=True)