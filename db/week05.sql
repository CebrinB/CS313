INSERT INTO ecommerce.address (address, city, state, zip) 
VALUES ('321 Wallaby Ln.', 'Sydney', 'AU', '11111');

INSERT INTO ecommerce.user (user_name, password, billing_address, billing_phone, display_name) 
  VALUES ('tester1', 'test127&', '1', '555-555-5555', 'John Doe');

INSERT INTO ecommerce.location (location_name, location_address, location_city, location_state, location_zip, location_phone)
  VALUES ('Corner Location', '121 N. Central Expwy', 'Richardson', 'TX', '11111', '555-555-5554');

INSERT INTO ecommerce.item (item_name, item_price, item_description) 
  VALUES ('Saddle', '899.95', 'Excellent Quality dark brown leather dressage saddle');