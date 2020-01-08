#
# Table structure for table 'tx_onlinescrapapp_domain_model_subcategory'
#
CREATE TABLE tx_onlinescrapapp_domain_model_subcategory (

	sub_category_id varchar(255) DEFAULT '' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_onlinescrapapp_domain_model_bookingdetails'
#
CREATE TABLE tx_onlinescrapapp_domain_model_bookingdetails (

	booking_id varchar(255) DEFAULT '' NOT NULL,
	quantity int(11) DEFAULT '0' NOT NULL,
	subcategory int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_onlinescrapapp_domain_model_bookings'
#
CREATE TABLE tx_onlinescrapapp_domain_model_bookings (

	customer_id varchar(255) DEFAULT '' NOT NULL,
	booking_time date DEFAULT NULL,
	date_time datetime DEFAULT NULL,
	visit_id varchar(255) DEFAULT '' NOT NULL,
	order_summary varchar(255) DEFAULT '' NOT NULL,
	comments varchar(255) DEFAULT '' NOT NULL,
	status int(11) DEFAULT '0' NOT NULL,
	feedback varchar(255) DEFAULT '' NOT NULL,
	scrap_collector int(11) unsigned DEFAULT '0',
	booking_details int(11) unsigned DEFAULT '0',
	locality int(11) unsigned DEFAULT '0'

);

#
# Table structure for table 'tx_onlinescrapapp_domain_model_category'
#
CREATE TABLE tx_onlinescrapapp_domain_model_category (

	category_id varchar(255) DEFAULT '' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	subcategory text NOT NULL

);

#
# Table structure for table 'tx_onlinescrapapp_domain_model_customeraddress'
#
CREATE TABLE tx_onlinescrapapp_domain_model_customeraddress (

	customer_id varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	building varchar(255) DEFAULT '' NOT NULL,
	street varchar(255) DEFAULT '' NOT NULL,
	locality varchar(255) DEFAULT '' NOT NULL,
	pincode int(11) DEFAULT '0' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	state varchar(255) DEFAULT '' NOT NULL,
	country varchar(255) DEFAULT '' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_onlinescrapapp_domain_model_locality'
#
CREATE TABLE tx_onlinescrapapp_domain_model_locality (

	name varchar(255) DEFAULT '' NOT NULL,
	status int(11) DEFAULT '0' NOT NULL,
	locality_id varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_onlinescrapapp_domain_model_scrapcollector'
#
CREATE TABLE tx_onlinescrapapp_domain_model_scrapcollector (

	collector_id varchar(255) DEFAULT '' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	phone_number varchar(255) DEFAULT '' NOT NULL,
	email_id varchar(255) DEFAULT '' NOT NULL,
	social_security_number int(11) DEFAULT '0' NOT NULL,
	gender varchar(255) DEFAULT '' NOT NULL,
	birth_date date DEFAULT NULL,
	account_number int(11) DEFAULT '0' NOT NULL,
	bank_name varchar(255) DEFAULT '' NOT NULL,
	uniform_size varchar(255) DEFAULT '' NOT NULL,
	cap varchar(255) DEFAULT '' NOT NULL,
	issue_date date DEFAULT NULL,
	id_expiry date DEFAULT NULL,
	status int(11) DEFAULT '0' NOT NULL,
	rating int(11) DEFAULT '0' NOT NULL,
	locality int(11) unsigned DEFAULT '0'

);

#
# Table structure for table 'tx_onlinescrapapp_domain_model_customer'
#
CREATE TABLE tx_onlinescrapapp_domain_model_customer (

	customer_id varchar(255) DEFAULT '' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	password varchar(255) DEFAULT '' NOT NULL,
	login_type varchar(255) DEFAULT '' NOT NULL,
	status int(11) DEFAULT '0' NOT NULL,
	registration_key varchar(255) DEFAULT '' NOT NULL,
	customer_address int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_onlinescrapapp_domain_model_facts'
#
CREATE TABLE tx_onlinescrapapp_domain_model_facts (

	info text,
	rank int(11) DEFAULT '0' NOT NULL,
	fact_id varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_onlinescrapapp_domain_model_collections'
#
CREATE TABLE tx_onlinescrapapp_domain_model_collections (

	quantity int(11) DEFAULT '0' NOT NULL,
	amount varchar(255) DEFAULT '' NOT NULL,
	booking_details int(11) unsigned DEFAULT '0' NOT NULL,
	category int(11) unsigned DEFAULT '0' NOT NULL,
	sub_category int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_onlinescrapapp_bookingdetails_subcategory_mm'
#
CREATE TABLE tx_onlinescrapapp_bookingdetails_subcategory_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_onlinescrapapp_customer_customeraddress_mm'
#
CREATE TABLE tx_onlinescrapapp_customer_customeraddress_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_onlinescrapapp_collections_bookingdetails_mm'
#
CREATE TABLE tx_onlinescrapapp_collections_bookingdetails_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_onlinescrapapp_collections_category_mm'
#
CREATE TABLE tx_onlinescrapapp_collections_category_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_onlinescrapapp_collections_subcategory_mm'
#
CREATE TABLE tx_onlinescrapapp_collections_subcategory_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
