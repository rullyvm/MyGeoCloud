<?php
$fieldsSigned = array(
	"id"=>"id",
	"adresse"=>"Adresse",
	"bygningsnummer"=>"Bygningsnummer",
	"opfoerelsesaar"=>"Opførelsesår",
	"aendringsaar"=>"Ændringsår",
	"bebyggetareal"=>"Bebygget areal",
	"anvendelse"=>"Anvendelse",
	///"mapid"=>"mapid",
	//"Mapframe"=>"Udpeg Bygning",
	//"geometry1"=>"Punkt",
	"registrator"=>"Registrator",
	"registreringsdato"=>"Registreringsdato",
	"noter"=>"Noter",
	"registrering_kode"=>"Registreringsnote",
	//"assets3"=>"Assets3",
	//"takepicture"=>"Billede fra offentlig vej",
	//"assets4"=>"Assets4",
	//"takepicture_2"=>"Facadebilleder",
	//"assets5"=>"Assets5",
	//"takepicture_3"=>"Billeder af detaljer",
	"aendret_opfoerelsesaar"=>"Ændret opførelsesår",
	"aendr_opf_praecision"=>"Præcision",
	"kilde_opfoerelse"=>"Kilde til opførelsesår",
	"anden_kilde_opfoerelse"=>"Angivelse af anden kilde til ændret opførelsesår",
	"kilde_aendret_anvendelse"=>"Kilde til ændret anvendelse",
	"aendret_anvendelse"=>"Ændret anvendelse",
	"aendret_facademateriale"=>"Ændret facademateriale",
	"aendret_tagdaekning"=>"Ændret tagdækning",
	"betegnelse"=>"Betegnelse",
	"bygn_stilart"=>"Stilart",
	"arkitektur"=>"Arkitektur",
	"arkitektur_kommentar"=>"Kommentar",
	"kulturhistorie"=>"Kulturhistorie",
	"kulturhistorie_kommentar"=>"Kommentar",
	"miljoevaerdi"=>"Miljømæssig værdi",
	"miljoevaerdi_kommentar"=>"Kommentar",
	"originalitet"=>"Originalitet",
	"originalitet_kommentar"=>"Kommentar",
	"tilstand"=>"Tilstand",
	"tilstand_kommentar"=>"Kommentar",
	"bevaring"=>"Bevaringsværdi *",
	"bevaring_kommentar"=>"Kommentar",
	"bygningsbeskrivelse_folger"=>"Bygningsbeskrivelse følger",
	"bygn_hovedplan"=>"Hovedplan",
	"bygn_sokkel"=>"Sokkel",
	"Ydervaeg_kode"=>"Ydervæg_kode",
	"bygn_ydermur"=>"Ydermur",
	"Tag_kode"=>"Tag_kode",
	"bygn_tagkonstruktion"=>"Tagkonstruktion",
	"bygn_gavl"=>"Gavlkonstruktion",
	"bygn_kviste"=>"Kviste",
	"bygn_gesims"=>"Gesims",
	"bygn_doere"=>"Døre/porte",
	"bygn_vinduer"=>"Vinduer",
	"bygn_bygningsdele"=>"Bygningsdele",
	"bygn_udsmykning"=>"Udsmykning",
	"forhold_andre_bygn"=>"Bemærkninger vedr. forhold til andre bygninger",
	"omgivelser"=>"Omgivelser af særlig interesse",
	"omgivelser_smaabygninger"=>"Småbygninger af interesse",
	"omgivelser_bygningsvaerker"=>"Bygningsværker af interesse",
	"omgivelser_artefakter"=>"Artefakter af interesse",
	"omgivelser_natur"=>"Natur af interesse",
	"omgivelser_anlaeg"=>"Anlæg af interesse",
	"omgivelser_bemaerkninger"=>"Bemærkninger vedr. omgivelser",
	"oprindelig_anvendelse"=>"Oprindelig anvendelse",
	"bebyggelsesmiljoe"=>"Bebyggelsesmiljø",
	"bebyggelsesmiljoe_koebstad"=>"Købstadsmiljø",
	"bebyggelsesmiljoe_stationsby"=>"Stationsbymiljø",
	"bebyggelsesmiljoe_landevejsby"=>"Landevejsbymiljø",
	"bebyggelsesmiljoe_fiskerleje"=>"Fiskerlejemiljø",
	"bebyggelsesmiljoe_mindre_beb"=>"Miljø i mindre bebyggelsesklynge",
	"bebyggelsesmiljoe_fritliggende"=>"Miljø på fritliggende ejendom"
	);
$fieldsUnSigned = $fieldsSigned;
if ($arr['vcUserName']) {
	$fields = $fieldsSigned;
}
else {
	$fields = $fieldsUnSigned;
}