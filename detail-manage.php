<?php
include 'header.php';
$title      = null;
$package    = null;
$content    = null;
$vedio      = "https://www.youtube.com/embed/";
$img        = null;
$imgTitle   = null;
$imgContent = null;

function setUpContent($place)
{
    switch ($place) {
        case "flight":
            $GLOBALS['title']      = "KOK - TVM Flight";
            $GLOBALS['package']    = "Single Day Package";
            $GLOBALS['content']    = array(
                "In this package, you will be experiencing the amazement and the real beauty of the kerala from the sky.You can feel the God's own country from the sky in its true beauty.It will surely be an amazing experience for both young and adults to explore kerala in a new perspective.",
                "The package includes one way flight trip to trivandrum.the traveller can choose the return trip from the two available options, bus or train."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "pqiKQgoSSVo";
            $GLOBALS['img']        = array(
                "images/flight-package/1.jpeg",
                "images/flight-package/2.jpg",
                "images/flight-package/5.jpg",
                "images/flight-package/4.png",
                "images/flight-package/3.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Cochin International Airport",
                "Cochin Airport Terminals",
                "Amazing view",
                "Trivandrum Airport Terminals",
                "Trivandrum International Airport"
            );
            $GLOBALS['imgContent'] = array(
                "Cochin International Airport located about 25 kilometres (16 mi) northeast of the city is the world's first fully solar powered airport.",
                "Cochin International Airport has three main terminals: two domestic and one international. There is also a cargo terminal.",
                "Look down to your God's own country in its true form.",
                "There are two terminals. Terminal 1 is for domestic flights (except Air India), and Terminal 2 is for all international flights as well as all domestic flights of Air India.",
                "Trivandrum International Airport is the second busiest airport in Kerala after Kochi.In addition to civil operations, Trivandrum Airport caters to the Indian Air Force (IAF) and the Coast Guard for their operations."
            );
            break;
        
        case "kochi":
            $GLOBALS['title']      = "Kochi";
            $GLOBALS['package']    = "Single Day Package";
            $GLOBALS['content']    = array(
                "Kochi the most popular tourist destination for both domestic and international visitors to Kerala and is among the most visited tourist destinations in India. It is situated on the south-east coast of India. Across the water from Cochin is the main town of Ernakulam, which is the centre for transport, shipping and thriving local businesses along with its surrounding islands, towns and conurbations, forms the biggest urban area in the state of Kerala.",
                "Kochi is regarded as the gateway to Kerala as it is connected to all the major cities in India. Kochi has been of strategic importance to India as it is a major port city on the south westcoast of India by the Laccadive sea. It is known as the “Queen of Arabian Sea."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "09llwvVxaT4";
            $GLOBALS['img']        = array(
                "images/kochi-package/1.jpg",
                "images/kochi-package/2.jpg",
                "images/kochi-package/3.jpg",
                "images/kochi-package/4.jpg",
                "images/kochi-package/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Kochi Metro",
                "Lulu Sparkys",
                "Hill Palace Museum",
                "Mango Meadows Agricultural Park",
                "Wonderla"
            );
            $GLOBALS['imgContent'] = array(
                "The rapid transit system serving the city of Kochi in Kerala makes the commuting even more fun.",
                "Kerala's only ice skating rink. An awesome gaming zone. A classy 12 lane bowling alley. World-class 5D Cinema experience , Trampoline Park - Rebound and a host of other entertainment options.",
                "Hill Palace is the largest archeological museum in Kerala, located at Tripunithura, Kochi. It was the imperial administrative office and official residence of Cochin Maharaja. Built in 1865, the palace complex consists of 49 buildings in the traditional architectural style, spreading across 54 acres.",
                "Mangomeadows is the world’s 1st Agricultural theme park spread across 30 acres of land with more than 4500 species of plants and trees. It is one of the most bio diverse pieces of land on the planet.",
                "Wonderla, is one of the largest chain of amusement parks in India.The loudest, craziest, and the most amazing part of town.It’s a place to celebrate the smaller moments and share big wonders. Get on one of the 50+ exhilarating rides, or simply laze by the pool under the bright sun."
            );
            break;
        
        case "kollam":
            $GLOBALS['title']      = "Kollam";
            $GLOBALS['package']    = "Single Day Package";
            $GLOBALS['content']    = array(
                "Kollam (formerly Quilon) has a cross-section of Kerala's natural attributes; it is endowed with a long coastline, a major Laccadive Sea seaport and an inland lake (Ashtamudi Lake). The district has many waterbodies. Kallada river is one among them, and the east side land of river is EastKallada and the west side land is WestKallada. Kallada Boat race is one among the famous festival events of district. Even though it is a competition between two land sides of the river, many boat clubs from various place,s even beyond the district participate in the event. Kollam is the capital of Kerala's cashew industry. "
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "t-j-4_CEQ14";
            $GLOBALS['img']        = array(
                "images/kollam-package/2.jpg",
                "images/kollam-package/3.jpg",
                "images/kollam-package/1.jpg",
                "images/kollam-package/4.jpg",
                "images/kollam-package/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Jatayu Nature Park",
                "Thenmala Kollam",
                "Tangasseri Lighthouse",
                "Kollam Beach",
                "Ashtamudi Lake"
            );
            $GLOBALS['imgContent'] = array(
                "This 65-acre tourist attraction features a giant concrete statue of Jatayu, plus various activities.",
                "Thenmala is an ecotourism site in Kerala, a state in southwest India. It lies just north of the Thenmala Dam, which spans the Kallada River. The Elevated Walkway winds through a thick canopy of trees, home to many native birds.",
                "Kollam (Quiolon or Quilan) lighthouse, or Tangasseri (Thankasseri) Point Lighthouse, located about 4 km from Kollam, Kerala, India",
                "Kollam Beach, also known as Mahatma Gandhi Beach, is a beach at Kollam city in the Indian state of Kerala. Kollam Beach is the first 'Beach Wedding Destination' in Kerala.",
                "Ashtamudi Lake, in the Kollam District of the Indian state of Kerala, is the most visited backwater and lake in the state. It possesses a unique wetland ecosystem and a large palm-shaped water body."
            );
            break;
        
        case "tvm":
            $GLOBALS['title']      = "Trivandrum";
            $GLOBALS['package']    = "Single Day Package";
            $GLOBALS['content']    = array(
                "Thiruvananthapuram, the capital of the southern Indian state of Kerala promotes the area's hill stations, back waters, beaches, lagoons, and wildlife sanctuaries. The area is a tourism destination and receives chartered flights for medical tourism, as there are more than hundred recognised Ayurveda centres in and around the city.",
                "It's distinguished by its British colonial architecture and many art galleries. It’s also home to Kuthira Malika (or Puthen Malika) Palace, adorned with carved horses and displaying collections related to the Travancore royal family, whose regional capital was here from the 18th–20th centuries. "
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "_gyLCbPaNp8";
            $GLOBALS['img']        = array(
                "images/tvm-package/2.jpg",
                "images/tvm-package/3.jpg",
                "images/tvm-package/4.jpg",
                "images/tvm-package/5.jpg",
                "images/tvm-package/6.jpg",
                "images/tvm-package/7.jpeg",
                "images/tvm-package/8.jpg",
                "images/tvm-package/9.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Trivandrum Zoo",
                "Shanmugam Beach",
                "Kovalam Beach",
                "Magic Planet",
                "Priyadarshini Planetarium",
                "Veli Beach",
                "Vettukad Church",
                "Sree Padmanabhaswamy Temple"
            );
            $GLOBALS['imgContent'] = array(
                "Thiruvananthapuram Zoo is one of the oldest of its kind in India.A modernization project started in 1995, aims to gradually replace the old enclosures with spacious naturalistic enclosures. The state government of Kerala is undertaking this renovation with financial and technical help from the Central Zoo Authority.",
                "Shankumugham Beach is a beach in Thiruvananthapuram district of Kerala, south India. The beach is on the western side of Thiruvananthapuram and very near to Trivandrum International Airport.",
                "Kovalam is a small coastal town in the southern Indian state of Kerala, south of Thiruvananthapuram. At the southern end of Lighthouse Beach is a striped lighthouse with a viewing platform.",
                "Lively theme park devoted to the practice of magic, with street performances, aerialists & a museum.",
                "This is one of the most versatile planetariums in the country. The main GM-11 star field projector here can project almost all the constituents of the visible universe. It can also simulate the star-studded night sky over any location on the earth, on any day up to 12,500 years back or 12,500 years into the future.",
                " 
                Its where the Veli Lake meets the Arabian Sea which provides the unique boating and picnicking opportunities.One can also roam the gardens and have a nice picnic or choose to employ the boats for the entire duration of the trip. The view and feel of the place is extremely unique, considering it is merely 12 kms from the capital city of Thiruvananthapuram.",
                "The Vettukad Church is also known as the Madre De Deus Church meaning Mother of God and is especially renowned among the pilgrims and tourists for the Feast of Christ the King celebration.",
                "Padmanabhaswamy Temple is  built in an intricate fusion of the indigenous Kerala style and the Tamil style of architecture associated with the temples located in the neighbouring state of Tamil Nadu, featuring high walls, and a 16th-century Gopuram."
            );
            break;
        case "munnar":
            $GLOBALS['title']      = "Munnar";
            $GLOBALS['package']    = "Single Day Package";
            $GLOBALS['content']    = array(
                "Munnar is famous hill station on the Western Ghats in Kerala State, South India. The word is derived from the local language ‘Malayalam’ to mean “three rivers”, referring to the town’s strategic location at the confluence of the riversMadhurapuzha, Nallathanni and Kundaly.It is one of the top attractions/nature beauty spot that contributed to Kerala’s popularity as a travel destination. The Munnar once used to be the summer resort of the erstwhile British administration in south India.",
                "This hill station is marked by vast expanses of tea plantations, colonial bungalows, waterfalls and cool weather. Munnar has a legacy of its own when it comes to the origins and evolution of tea plantations. It offers a magnificent view of the tea plantations and also the rolling hills caressed by blankets of mists.It is also an ideal destination for trekking and mountain biking."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "LIBj3WC-9xo";
            $GLOBALS['img']        = array(
                "images/munnar-package/3.jpg",
                "images/munnar-package/4.jpg",
                "images/munnar-package/5.jpg",
                "images/munnar-package/6.jpg",
                "images/munnar-package/7.jpg",
                "images/munnar-package/8.jpg",
                "images/munnar-package/9.jpg",
                "images/munnar-package/10.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Rajamala",
                "Mattupetty",
                "Echo Point",
                "Tea museum",
                "Spice Park",
                "Camp Fire",
                "Wonder Valley",
                "Dreamland Adventure"
            );
            $GLOBALS['imgContent'] = array(
                "Rajamala Hills, Idukki
                People flock to Rajamala to watch the NilgiriTahr in its natural habitat. Rajamala is among the finest Hill Stations in Idukki. You're surrounded by what seems like a lush green carpet on all sides. Rare flora and fauna abound along with some of the finest trekking trails in the area.",
                "Mattupetty is among the most visited destinations in the tourist hotbed of Munnar. People love visiting the dam and lake here and families can regularly be seen enjoying a fine afternoon in the area. The view of the valley from here is breath-taking and one gets to simply relax and enjoy the beautiful weather.",
                "About 15 km from Munnar lies the famous Echo Point. Popular for its natural echo phenomenon, one can always see the area full of eager visitors throughout the year. At an altitude of about 600 ft, people love taking a walk in the lush greenery surrounding the place. It is an ideal picnic spot.",
                "The plantations played a huge role in attracting people to the Munnar. Tata Tea established a Tea Museum in 2005 which has photographs and machineries, which chronicle the journey of tea in the area.",
                "The Spice Park at Puttady is meant for Cardamom (Small) and Pepper. The Park is developed in an area of 10 Acres of land at Puttady in Idukki District of Kerala.",
                "Hoodies. Guitar.  Music. Friends. Cuddle. Dance. Fun – Bonfire! ",
                "Indoor/outdoor amusement park featuring ropes courses, rock climbing, paint ball & a video arcade.",
                "Open-air family park with ziplines, camel rides, cablecars, mountain biking & a haunted house."
            );
            break;
        
        case "wagamon":
            $GLOBALS['title']      = "Vagamon";
            $GLOBALS['package']    = "Single Day Package";
            $GLOBALS['content']    = array(
                "Vagamon is a hill station located in Kottayam- Idukki border of Kerala. It has a cool climate with the temperature between 10-23°C during a summer midday. It is situated 1,100 metres above sea level.",
                "Vagamon is a tiny plantation township in Central Travancore, Vagamon has an overtone of green. With a never-ending line of lush green hills, breathtaking ravines and meandering rivulets. A perfect tourist place situated 1200 meters above the sea level spot surrounded by the greenery of tea gardens , Fresh cool air, murmuring Pine forest ,small waterfalls , attractive meadows inviting you to vagamon.Reaching Vagamon itself is an extraordinary experience.",
                "This tourist place also has to offer Thangal Para, the Indo-Swiss Project and Kurisumala Ashram. Welcome to a land which would make you come back again and again. So that you could rejuvenate yourself and cherish memories of this enchantingly beautiful land.Vagamon hill station is comprised of a beautiful series of hillocks, valleys and cascading waterfalls that make it the ideal getaway for tourists. "
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "2BXfoZBfAH8";
            $GLOBALS['img']        = array(
                "images/wagamon-package/1.jpg",
                "images/wagamon-package/2.jpg",
                "images/wagamon-package/3.jpg",
                "images/wagamon-package/4.jpg",
                "images/wagamon-package/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Mottakunnu",
                "Pine Valley",
                "Paruthumpara",
                "Ulipooni Wildlife Sanctuary",
                "Vagamon meadows"
            );
            $GLOBALS['imgContent'] = array(
                'Motta Kunnu" in local language, "Motta" means Egg or Bald and "Kunnu" means hillock. Hence the name means bald / barren hills. These types of bald hills without trees are the unique feature of Vagamon.Grass covered hill background can give a good photo shoot. No wonder, this place is quite crowded with a lot of people and cameras clicking.',
                "Pine Valley or Pine Forest, a valley having huge lofty pine trees lined in rows, an artificial forest. It is one of the main attractions of Vagamon. It is a favourite mark for the lovers of nature. The Pine forests stretched over a wide area of sloppy hills",
                "Parunthumpara or 'Eagle Rock’ is situated near Peermedu in Idukki district, is a place famed for its pristine natural beauty. A trekker's delight offering a bird's eye view of an endless stretch of green forests and the landscape, Parunthumpara is a favourite of off-beat travellers.",
                "Serene and peaceful atmosphere coupled with the perfect cool climate of a hill station, Ulipooni is known to be a lovely picnic spot. It is also frequented by couples who go for a boat ride along the lake by the sanctuary.",
                "If you are taking this vacation as a getaway from everyday life, you might find inner peace at a place you least expected.This place will leave you feeling much lighter mentally. Find your spot and be with yourself for a while, you will love the experience."
            );
            break;
        
        case "idukki":
            $GLOBALS['title']      = "Idukki";
            $GLOBALS['package']    = "Single Day Package";
            $GLOBALS['content']    = array(
                "This beautiful High range district of Kerala is geographically known for its Mountainous Hills and Dense Forests. For the people of Kerala, Idukki is always associated with Power Generation. About 66% of the State’s Power needs come from the Hydroelectric Power Projects in Idukki.",
                " Idukki which lies in the Western Ghats of Kerala is the second largest district in area but has the lowest population density. Idukki has a vast forest reserve area; more than a half of the district is covered by forests. The urban areas are densely populated whereas villages are sparsely populated. Idukki is also known as the spice garden of Kerala."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "6AHOjD__ask";
            $GLOBALS['img']        = array(
                "images/idukki-package/1.jpg",
                "images/idukki-package/2.jpg",
                "images/idukki-package/3.jpg",
                "images/idukki-package/4.jpg",
                "images/idukki-package/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Idukki Dam",
                "Kalvari Mount",
                "Ramakkalmedu",
                "Anchuruli",
                "Ramakkalmedu"
            );
            $GLOBALS['imgContent'] = array(
                "The Idukki Dam is a double curvature Arch dam constructed across the Periyar River in a narrow gorge between two granite hills locally known as Kuravan and Kurathi in Kerala, India.",
                "The Kalvari Mount Viewpoint offers a charming view of Idukki Reservoir from Idukki to Ayyappancovil on one side and panoramic view of Kamakshy and Mariyapuram villages on the other side. It is one of the most scenic places in Idukki and a must visit place in the district.",
                "Cool, green hills and the fresh mountain air make Ramakkalmedu an enchanting retreat. The place gets its name from the impressions of the feet found on the rock surface here, which is believed to be of Rama, the incarnation of Lord Vishnu, as told in the Indian epic Ramayana.",
                "Situated amongst the gushing locations in Western Ghats Land and providing an enchanting view of the semi-evergreen forests grasslands, Anchuruli Waterfalls (also spelt as Anjuruli) is a surreal location definitely worth visiting. ",
                "An exquisite hill station situated in the Idukki District on the Kerala-Tamil Nadu state border and home to a number of attractions Ramakkalmedu is a must-visit attraction."
            );
            break;
        
        case "thrissur":
            $GLOBALS['title']      = "Thrissur";
            $GLOBALS['package']    = "Single Day Package";
            $GLOBALS['content']    = array(
                " The cultural capital of Kerala, the Poorams or temple festivals in Thrissur draw in thousands of people every single year as these carnivals encapsulate every single part of Kerala's rich heritage. These are a hotbed of folk art performances and heritage tours that will give you an in depth look into some of the grandest traditions of the State. ",
                "From majestic elephants to colourful pulikali processions to the world renowned Thrissur Pooram, there is always a festive atmosphere in the air. The district is also the abode of several cultural centres like Kerala Kalamandalam, Sahitya Academy and the Sangeetha Nataka Academy. Thrissur is a place one must visit at least once in their lifetime. The people, swaying with the beats of the chenda, shall help you understand the true heart and spirit of Kerala."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "Rp6LZAEZu3U";
            $GLOBALS['img']        = array(
                "images/thrissure-package/1.jpg",
                "images/thrissure-package/2.jpg",
                "images/thrissure-package/3.jpg",
                "images/thrissure-package/4.jpg",
                "images/thrissure-package/5.jpg",
                "images/thrissure-package/6.jpg",
                "images/thrissure-package/7.jpg",
                "images/thrissure-package/8.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Athirappilly Falls",
                "Vazhachal Falls",
                "Ezhattumugham",
                "Dreamworld Water Park",
                "Silver Storm",
                "Picnic Island",
                "Thrissur Zoo",
                "Peechi Dam"
            );
            $GLOBALS['imgContent'] = array(
                "Athirapally Falls is a marvellous cascade of frothy waters that makes its way from the Anamudi mountains of the Western Ghat.It flows through the verdant greenery of Vazhachal Forest toward the Arabian Sea, creating a spectacular vista of scintillating water, emerald jungles and azure sky.",
                "Vazhachal Waterfalls is famous for not just their view but the endemic species found in the surrounding dense forests.Researchers have found four endangered species of the Hornbill here, the only place they thrive in the entire Western Ghats.",
                "Ezhattumugham tourism village bounded with the greenish lush beauty of the river side near to the waterfalls of Athirappilly. The beautiful tourist village blessed with the beauty of chalakkudy river and nature beauty o surrounding places by the real nature beauty. chalakkudy river is the fourth most largest river in kerala which flows its maximum in thrissur district.",
                "Dream World is a Large-scale water amusement park with wave pool, rafting, water chutes & rides. It is one of the very popular tourist attractions.",
                "The popular Water Theme Park in Kerala strategically situated near natural attractions like the Athirappilly waterfalls and Vazhachal, offering a great eco-friendly environment to give you the best adventure of your life amidst nature! ",
                "Perfect destination for adventure and fun for all age groups located at a distance of 12kms from Chalakudy close to Athirappilly water falls.",
                "The zoo houses a wide variety of animals, reptiles, and birds. Besides the extensive variety of fauna, the zoo has many other attractions to fascinate you. There is a Zoological Garden, Botanical Garden, a Natural History Museum and an Art Museum, showcasing the socio-cultural heritage of the region.",
                "Peechi Dam lies at a distance of 23 km from Thrissur. The dam is the main irrigation project of this town of Kerala. It is a very famous attraction, and visitors come here now and then for the fantastic picnic spot it serves as and for the boating facilities which are offered at this reservoir."
            );
            break;
        
        case "ooty":
            $GLOBALS['title']      = "Ooty";
            $GLOBALS['package']    = "Multi Day Package";
            $GLOBALS['content']    = array(
                "Ooty, the Queen of Hill stations, welcome you with mesmerising meadows, soothing environment, cool weather and a wide array of sightseeing places to visit and admire. Each tourist attraction in Ooty promises a unique and lively experience that will leave you in awe for many days to come. ",
                "This gem among southern hill resorts is covered in eucalyptus and pine trees and coffee and tea plantations. On a clear day, it's possible to see as far as the Mysore plateau from Dodabetta Peak, the district's most prominent viewpoint."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "7VDx6qnNwvY";
            $GLOBALS['img']        = array(
                "images/ooty/1.jpg",
                "images/ooty/2.jpg",
                "images/ooty/3.jpg",
                "images/ooty/4.jpg",
                "images/ooty/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Fernhill Palace",
                "Emerald Lake",
                "The Nilgiri Mountain Railway toy train",
                "Pykara Lake",
                "Doddabetta Peak"
            );
            $GLOBALS['imgContent'] = array(
                "Once the residence of the Maharaja of Mysore, the Fernhill Palace was built in 1844 over 50 sprawling acres of lush gardens and eucalyptus forests. Today, it is a restored heritage hotel that exudes the character of the royal palace that it once was. ",
                "As the name suggests, Emerald Lake gets its name from the reflection of the green mountains that surrounds it. A picturesque picnic spot about 25 kilometres from Ooty’s city centre, Emerald Lake offers breath-taking sceneries.",
                                                                 
                "The Nilgiri Mountain Railway toy train is the highlight of a visit to the popular hill station of Ooty, in south India's Tamil Nadu state. Established in the early 19th century by the British as the summer headquarters of the Chennai government, Ooty now draws tourists wanting to escape the stifling summer heat.",
                "Pykara Lake is a placid lake formed by the backwaters of Pykara Dam in Ooty. Situated on Ooty – Mysore road, Pykara Dam built on Pykara River is a beautiful place offering breathtaking scenery. This is a blessed lake for the Todas, the local tribe of Nilgiris. Pykara Lake is one of the top Ooty Tourist Places and an ideal place to experience beautiful boat ride.",
                "The highest mountain at over 2.600 metres in the Nilgiris Hills, Doddabetta Peak is ensconced by dense forests of eucalyptus and rhododendron trees. The observatory atop the peak offer 360-degree panoramic views of the pristine surroundings."
            );
            break;

        case "kodai":
            $GLOBALS['title']      = "Kodaikanal";
            $GLOBALS['package']    = "Multi Day Package";
            $GLOBALS['content']    = array(
            "Kodaikanal is one of the very popular and most sought after Honeymoon and holiday destination hill resorts in South India. This hill station stands 7200 feet above sea level and situated in upper palani hills of the westernghats near Madurai in Tamil Nadu. Kodaikanal is also popularly known as the princes of Hill Stations.",
                "Comprised of densely wooded jungles, undulating hill slopes, meandering rivers, cascading waterfalls, and verdure valleys-Kodaikanal's scenic beauty never fails to mesmerise travellers.  ",
                "Often referred to as the 'Princess of Hills', Kodaikanal is one of the most popular tourist destinations in South India. Situated at an elevation of 7000 feet above sea-level, along the crest of the Palani Hills, Kodaikanal leaves travellers spoilt for choice while it comes to the places to visit. The major valleys-the Parappar and Gundar surround Kodaikanal from both sides."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "ic-AjUfRzR4";
            $GLOBALS['img']        = array(
                "images/kodai/1.jpg",
                "images/kodai/2.jpg",
                "images/kodai/3.jpg",
                "images/kodai/4.jpg",
                "images/kodai/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Pillar Rocks",
                "Devil's Kitchen",
                "Coakers Walk",
                "Green Valley View",
                "Kodaikanal"
            );
            $GLOBALS['imgContent'] = array(
                "This sightseeing spot is home to three huge rocks vertically located in a way that gives them an appearance of pillars, thus giving them their name. These boulders are approximately 400 feet tall. Pillar Rocks has spectacular panoramic views around it, too, making it a great spot for enjoying a relaxing time with your family. Click some spectacular photographs of your family and make the spot an unforgettable one, but be very careful!",
                "Near Pillar Rocks are some natural caves known as the Devil’s Kitchen. It is another interesting sightseeing place in our list of the best places to visit in Kodaikanal.The caves were formed due to unusual rock formations and were formed due to constant eroding of soil.",
                "The picturesque path provides a holistic view of the stunning hills and views of Kodaikanal. Perfect during the winter months, this place delights adventure enthusiasts and photographers alike. With your morning or even evening walks in this pleasant location, you are guaranteed to think of it longingly once you are back to your routine.",
                "This place has been renamed from Suicide point to Green Valley View. However, on your visit, you will find that the locals still call this place the Suicide Point. Do not get wary of the place thanks to its name, though. This is one of the best places to visit in Kodaikanal.",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et dignissim
                                                                    mauris, ac Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et
                                                                    dignissim"
            );
            break;
        
        case "goa":
            $GLOBALS['title']      = "Goa";
            $GLOBALS['package']    = "Multi Day Package";
            $GLOBALS['content']    = array(
                "Goa is best known for its idyllic tropical climate and paradise landscape of white-sand, palm-fringed beaches.The 130 km long coastline of Goa on the golden Konkan coast of the Western Ghats is along the Arabian Sea. This small former Portuguese enclave is one of India’s most popular tourist spots, both for the domestic and international traveller.",
                "A kaleidoscopic blend of Indian and Portuguese cultures, sweetened with sun, sea, sand, seafood, susegad and spirituality, Goa is India's pocket-sized paradise."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "TiQBXsJgzl4";
            $GLOBALS['img']        = array(
                "images/goa/1.jpg",
                "images/goa/2.jpg",
                "images/goa/3.jpg",
                "images/goa/4.jpg",
                "images/goa/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Panaji",
                "Agonda beach",
                "FORT AGUADA",
                "BAGA BEACH",
                "CASINO IN PANJIM"
            );
            $GLOBALS['imgContent'] = array(
                "One of India’s most relaxed state capitals, Panaji (Panjim) crowds around the peninsula overlooking the broad Mandovi River, where cruise boats and floating casinos ply the waters, and advertising signs cast neon reflections in the night.",
                "This is an isolated stretch of sand lined by palm groves. It is a very quiet, peaceful, and picturesque beach with few tourists. There is a turtle center in the north, and rocky outcrops in the south. Developed tourist infrastructure!",
                "The Portuguese constructed this fort as a defense against the Marathas and the Dutch. There is a deep dry moat here and a 13 meter high lighthouse, which was constructed in 1864. Many buildings within the fort are still in very good condition.",
                "The Baga River is in the north. Calangute beach, also popular, is in the south. The Baga-Calangute stretch is one of the longest sandy shores in Goa.",
                "Casino gaming is big in Goa. In Goa, you will find both land-based and off-shore casinos, on ships. Many casinos are located just off Panjim, on the Mandovi River. "
            );
            break;
        
        case "kanyakumari":
            $GLOBALS['title']      = "Kanyakumari";
            $GLOBALS['package']    = "Multi Day Package";
            $GLOBALS['content']    = array(
                "Kanyakumari is the southernmost point of peninsular India and the meeting point of three oceans-the Bay of Bengal, the Arabian Sea and the Indian Ocean. Besides its importance as a Hindu pilgrim center, it is famous for its beautiful views of sunrise and sunset over the waters. The multicolored sand is a unique feature of the beach here.",
                "Earlier known as Cape Comorin, Kanyakumari is surrounded by mountains and bordered by vibrant sea shores, lined with paddy fields and coconut trees, and also boasts of aesthetic elevated patches of hills with undulating valleys and plains in between the sea and the mountainous terrain.",
                "The Kanyakumari temple, also known as the Bhagvaty Amman Temple or the Kumari Amman temple is one of the major Hindu temples all across India. Built in dedication to Goddess Kumari Amman, the temple finds mention in almost all ancient Hindu scriptures and is frequented by pilgrims looking to pay their respects to the virgin goddess Kanya Devi."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "2EdwDAq74rw";
            $GLOBALS['img']        = array(
                "images/kanyakumari/1.jpg",
                "images/kanyakumari/2.jpg",
                "images/kanyakumari/3.jpg",
                "images/kanyakumari/5.jpg",
                "images/kanyakumari/4.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Vivekananda Rock Memorial",
                "Thirparappu Falls",
                "Thiruvalluvar Statue",
                "Kanyakumari Beach",
                "Padmanabhapuram Palace"
            );
            $GLOBALS['imgContent'] = array(
                "The colossal and imposing ‘Vivekananda Rock Memorial’ is seated on one of the two adjacent rocks projecting out of the Lakshadweep Sea and comprises of two important structures, the ‘Shripada Mandapam’ and the ‘Vivekananda Mandapam’.",
                "The cascading waters of the Thirparappu Falls make up for an enchanting sight. This waterfall is a manmade one and falls from a height of 50 feet. The water collects in a quaint pool below which is an ideal place to frolick around, especially for children.",
                "Just adjacent to the Vivekananda rock memorial is the towering stone statue of the much revered Tamil poet and philosopher, Thiruvalluvar. The 38-feet high pedestal is symbolic of the 38 chapters of virtue in the literary masterpiece.",
                "Located at the confluence of the Indian Ocean, Bay of Bengal and Arabian Sea.The differently coloured sand, stunning sunrise and sunset views at this beach, the lighthouse and Vivekananda memorial in the backdrop make for some superb picture perfect moments.",
                "This alluring 16th century teakwood palace is amongst the top kanyakumari sightseeing places and the finest example of Taccusastra (the ancient science of carpentry). A living proof of the architectural brilliance and rich heritage of the erstwhile kingdom of Travancore."
            );
            break;
        
        case "wayanad":
            $GLOBALS['title']      = "Wayanad";
            $GLOBALS['package']    = "Multi Day Package";
            $GLOBALS['content']    = array(
                "Wayanad, the green paradise is nestled among the mountains of the Western Ghats, forming the border world of the greener part of Kerala. Clean and pristine, enchanting and hypnotizing, this land is filled with history and culture.",
                "This verdant hill station is full of plantations, forests and wildlife. Wayanad hills are contiguous to Mudumalai in Tamil Nadu and Bandhipur in Karnataka, thus forming a vast land mass for the wild life to move about in their most natural abode."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "IVxUcCL-JC0";
            $GLOBALS['img']        = array(
                "images/wayanad/1.jpg",
                "images/wayanad/2.jpg",
                "images/wayanad/3.jpg",
                "images/wayanad/4.jpg",
                "images/wayanad/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "kuruva Island",
                "Chembra peak",
                "EDAKKAL CAVES",
                "The Pazhassi Tomb",
                "Lakkidi"
            );
            $GLOBALS['imgContent'] = array(
                " Kuruva Island is a protected river delta, comprising a cluster of islands over the middle of Kabini River in Wayanad.Dwelling deep into this island, you can sight many attractive things like bridges made up of bamboo trees and other rare species of trees. The uninhabited island is home to rare species of birds, orchids, herbal plants etc. ",
                "The Chembra peak offers a panoramic view of not only the entire Wayanad district but also a large chunk of Kozhikode, Malappuram and Niligiri districts. The peak, its surrounding lush greenery and the famed heart-shaped lake make it a paradise for travellers to explore.",
                "These caves are located 1,200 m above the sea level on Ambukutty Mala. The name ‘Edakkal’ literally means ‘a stone in between’. Here you can see a cave formed by a heavy boulder straddling a fissure in the rock.",
                "The Pazhassi Tomb is where thousands regularly pay homage to the famous Lion of Kerala, Kerala Varma Pazhassi Raja. The tomb was constructed in the place where his body was cremated, and is situated on the banks of River Kabani in Mananthavady.",
                "Lakkidi is one of the highest locations in Wayanad and is situated 700m above mean sea level, atop Thamarassery ghat pass.With the view of the entirety of Wayanad, Lakkidi also provides scenic beauty like never before. "
            );
            break;  
            
            case "mysore":
            $GLOBALS['title']      = "Mysore";
            $GLOBALS['package']    = "Multi Day Package";
            $GLOBALS['content']    = array(
                "Located in the foothills of the Chamundi Hills, Mysore is the third most populated city in the state of Karnataka, and its rich cultural heritage draws millions of tourists all year round.t was one of the three largest Princely States in the erstwhile British Empire of India. To this day, the Mysore Palace stands tall as one of the most spectacular palaces all over the country. ",
                "If you think the beauty of Mysore is restricted to magnificent palaces and other majestic buildings, then you probably have not heard of Brindavan Gardens, Mysore Zoo, Chamundi Hills, or Karanji Lake. These spectacular places, including a few sprawling gardens, and some stunning waterfalls & lakes, makes Mysore, one of the best tourist destinations in Karnataka. Mysore, which is also known as the cultural capital of Karnataka, is home to many opulent and royal palaces. It has several yoga centres and lush green sandalwood forests, that gave this city names like 'City of Palaces', 'Sandalwood City', and 'City of Yoga.'"
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "Qn2dEaSV-nM";
            $GLOBALS['img']        = array(
                "images/mysore/1.jpg",
                "images/mysore/2.jpg",
                "images/mysore/3.jpg",
                "images/mysore/4.jpg",
                "images/mysore/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Lalitha Mahal",
                "Brindavan Gardens",
                "Musical Fountain",
                "Infosys",
                "Lalitha Mahal Palace"
            );
            $GLOBALS['imgContent'] = array(
                "The Lalitha Mahal is now one of India's most opulent hotels, a palace hotel that offers an experience of princely living in a real Maharaja's palace.",
                "Spread over an area of 60 acres, Brindavan Gardens make you feel overwhelmed right from the entrance with its charming rose gardens and flowerbeds. ",
                "The musical fountain show presents a harmonized water dance, accompanied by colourful lights and music. It is one of the a popular feature of the Brindavan Gardens.",
                " Infosys is the torchbearer of India’s IT revolution. It is India’s sixth largest publicly traded company and currently employs 180,000 employees in offices scattered across the country. ",
                "The Lalitha Mahal is the second largest palace in Mysore. It is located near the Chamundi Hills, east of the city of Mysore in the Indian state of Karnataka. The palace was built in 1921 at the orders of His Highness Krishnaraja Wodeyar IV, the Maharaja of Mysore for the exclusive stay of the then Viceroy of India.[1] Built on a raised ground, the palace was fashioned on the lines of the St. Paul’s Cathedral in London and is one of the imposing structures of the Mysore city."
            );
            break; 
            
            case "bangalore":
            $GLOBALS['title']      = "Bengaluru";
            $GLOBALS['package']    = "Multi Day Package";
            $GLOBALS['content']    = array(
                "Bangalore, the Capital of the south Indian state of Karnataka is better known as Silicon Valley of India, a hub of most of the tech companies around the world.It is also known as the Pub City with the highest number of pubs in any Indian city and as Garden City for its year round blossoms and greenery.",
                "The spectacular growth of India’s boom town in electronics, software, telecommunications, back-office and call-centre support has not only greatly increased the population (to well over 6 million) but has also transformed the healthy climate; it is now several degrees hotter here now than it was 30 years ago. However, there are still pleasant walks to be had in Cubbon Park and in the terraced greenery of the botanical gardens of Lalbagh. A major transport centre, Bengaluru presents the modern face of India and has some of the country’s best accommodation, some excellent restaurants and lively bars. Also in Bengaluru is the headquarters of the Art of Living Foundation, the spiritual and humanitarian organisation founded by New Age guru and Hindu evangelist Sri Sri Ravi Shankar"
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "YBTDw6Hcu4I";
            $GLOBALS['img']        = array(
                "images/bangalore/1.jpeg",
                "images/bangalore/2.jpg",
                "images/bangalore/3.jpg",
                "images/bangalore/4.jpg",
                "images/bangalore/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Cubbon Park",
                "Nandi Hills",
                "Tipu Sultan’s Palace",
                "Lal Bagh Botanical Garden",
                "National Gallery Of Modern Art"
            );
            $GLOBALS['imgContent'] = array(
                "Cubbon Park, also known as Sri Chamarajendra Park is one of the famous landmarks of Bangalore. It was originally created in the year 1870 by Richard Sankey, who was the Mysore’s British Dominant Engineer at that time.",
                "Nandi Hills is one of the perfect places near Bangalore for nature lovers. The hill station is situated 60 kilometers from the city’s center and offers a fantastic view of monolithic granite figure. ",
                "The royal summer fort of the popular king “Tipu Sultan” is now transformed into a beautiful museum, and is certainly one of the best places to visit in Bangalore with kids.",
                "Lal Bagh is one of the most admired botanic gardens in India. It has an unusual glass house that hosts two flower shows every year, which falls on 15 August (Independence Day) and 26 January (Republic Day).",
                "A good place to see in Bangalore with friends and family is the National Gallery of Modern Art. Established in 2009, the gallery displays some of the extraordinary house paintings and modern art created by popular contemporary artists."
            );
            break;
            
            case "chikmagalur":
            $GLOBALS['title']      = "Chikmagalur";
            $GLOBALS['package']    = "Multi Day Package";
            $GLOBALS['content']    = array(
                "Almost every tourist who visits this scenic town falls in love with Chikmagalur's cool and pleasant atmosphere that compliments the rolling valleys, burdened with refreshing coffee gardens.",
                "There are several things that make Chikmagalur one of the best places to visit in Karnataka and Mullayanagiri is one such place, where tourists experience adventure trekking and nature trails. These activities encourage tourism in Chikmagalur and makes it a place worth visiting. Chikmagalur have plenty of points that offer breathtaking views of mountains and emerald landscapes with abundant coffee plants. This place is known as the 'coffee land' of Karnataka and is one of the largest coffee producers in India.",
                "Chikmagalur has a very unique and interesting history. If legends have to be believed, this place belonged to the daughter of Rukmangada, the ruler of Sakharayapatna, who gave this town to her as a gift of her wedding. If we translate the meaning of Chikmagalur in English, it says 'Young Daughter's Town'. The fact makes this place even more appealing for visitors, who love to flock into the city, especially during weekends to enjoy its cool & comfortable climate."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "RPcqdqOWMo4";
            $GLOBALS['img']        = array(
                "images/chikmagalur/1.jpg",
                "images/chikmagalur/2.jpg",
                "images/chikmagalur/3.jpg",
                "images/chikmagalur/4.jpg",
                "images/chikmagalur/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Baba Budan Giri",
                "Hebbe Falls",
                "Mullayanagiri",
                "Bhadra Wildlife Sanctuary",
                "Hirekolale Lake"
            );
            $GLOBALS['imgContent'] = array(
                "This fabulous spot in the north of Chikmagalur town has many intriguing caves and scenic points that offer spectacular views of the mountains and rolling valleys. Tourists can experience hiking, trekking, and enjoy nature trails at this destination.",
                "This beautiful waterfall offers an amazing view of Kemmangundi hill station. Water gushes down from this stunning fall and form two different waterfalls.",
                "This is the highest peak in Karnataka, close to 2000 meters and is surrounded by picturesque valleys and emerald coffee gardens.",
                "This glorious sanctuary has several species of animals, birds and trees. Some of the famous animals spotted here include Chinkara, four-horned antelopes, jackals, leopards, black bucks, and jungle cats.",
                "Hirekolale Lake is a beautiful manmade lake amidst beauty and surrounded by high mountains. The famous hills of Mullayanagiri can be viewed from here. This lake was built to supply water to Chikmagalur town and irrigation of lands in surrounding villages."
            );
            break;    

            case "coorg":
            $GLOBALS['title']      = "Coorg";
            $GLOBALS['package']    = "Multi Day Package";
            $GLOBALS['content']    = array(
                "Located amidst imposing mountains in Karnataka with a perpetually misty landscape, Coorg is the place to be for all nature lovers.  This popular coffee producing hill station is not only popular for its beautiful green hills and the streams cutting right through them. It also stands as a popular destination because of its culture and people. The Kodavas, a local clan specialising in martial arts, are especially notable for their keen hospitality.",
                "Madikeri is the region's centre point with all transportation for getting around starting from here. On a visit to Coorg, cover the beautiful towns like Virajpet, Kushalnagar, Gonikoppal, Pollibetta, and Somwarpet, and experience the beautiful concept of 'homestays' to make your experience more memorable! "
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "-biWI1nDBlg";
            $GLOBALS['img']        = array(
                "images/coorg/1.jpg",
                "images/coorg/2.jpg",
                "images/coorg/3.jpg",
                "images/coorg/4.jpg",
                "images/coorg/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "CORACLE RIDE",
                "Abbey Falls",
                "Talacauvery",
                "Raja's Seat",
                "White River Rafting"
            );
            $GLOBALS['imgContent'] = array(
                "Coracles are local fishing crafts that are circular and ideal for navigating these waters. The coracle ride on the river not only helps you to gauge the myriad moods of the river, but also gives you a fish-eye view of the surrounding forest and the habitation, and allows you to be a small part of the ebb and flow of riverine life.",
                "Abbey Falls, also known as Abbi Falls, is located around 10 kilometres away from the town of Madikeri and is one of the most popular tourist attractions in and around Coorg. ",
                "Talacauvery is the source of the river Kaveri, located on the Brahmagiri hill (not to be confused with the Brahmagiri range further south) near Bhagamandala in Kodagu district, Karnataka.",
                "The garden was a favorite venue to rejuvenate for the Kings of Kodagu, and they loved watching the sunsets sitting here as they spent some memorable time with their Queens.",
                "Barapole river is a famous white river rafting destination in Coorg. The white frothy river with speedy waters and rapids, flowing through beautiful landscapes, makes for an ideal river rafting experience. "
            );
            break;
            
            case "pondicherry":
            $GLOBALS['title']      = "Pondicherry";
            $GLOBALS['package']    = "Multi Day Package";
            $GLOBALS['content']    = array(
                "Pondicherry, officially known as Puducherry, and commonly referred to as just Pondy, is one of the seven Union Territories of India. This former French colony is a perfect amalgamation of the traditional Indian sensibilities and French architecture, making it a dreamy escape that offers the best of both worlds.",
                "The streets of the French Quarter of Pondicherry, also known as White Town, are dotted with charming mustard-yellow colonial structures with bougainvillaea laden walls. These are interspersed with cosy cafes and chic boutiques that offer delectable French cuisine and beverages. Simply strolling down these streets, can give the traveller an insight into the fairytale charm of Pondicherry.
                "
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "eBKYa0QjX5Y";
            $GLOBALS['img']        = array(
                "images/pondicherry/1.jpg",
                "images/pondicherry/2.jpg",
                "images/pondicherry/3.jpg",
                "images/pondicherry/4.jpg",
                "images/pondicherry/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Paradise Beach",
                "French Colony",
                "Aurobindo Ashram",
                "Seaside Promenade",
                "Auroville"
            );
            $GLOBALS['imgContent'] = array(
                "Paradise Beach, also known as Plage Paradiso, is situated in Chunnambar, close to Pondicherry town. Adorned with the golden sand, this famous and highly sought after beach is always swaying in a cold sea breeze. ",
                "The finest examples of old French culture with a hint of Tamil influence in its visual aesthetics.You will catch sight of some of the unique and old infrastructures.",
                "Aurobindo Ashram has been named after its creator- Sri Aurobindo Ghosh.The foundation of this ashram was laid on 24th November in the year 1926 when he was surrounded by his disciples all over after he retired from politics and settled in Pondicherry. This ashram was set up with the aim of helping people attain moksha and inner peace.",
                "One of the things that does justice to Pondicherry's French Roots is its beautiful Seaside Promenade. The area is well maintained, clean and beautiful and you can actually feel foam spray on your face while sipping a cooler in one of the many cafes at the promenade.",
                "Designed by popular architect Roger Anger, Auroville is a strategically planned, experimental township that aims to develop India through the idea of peaceful co-existence. The township, located close to Pondicherry is often referred to as the ‘City of Dawn’ and is named after Sri Aurobindo."
            );
            break; 
            
            case "hogenakkal":
            $GLOBALS['title']      = "Hogenakkal";
            $GLOBALS['package']    = "Multi Day Package";
            $GLOBALS['content']    = array(
                "Hogenakkal is where the Kaveri river splits into multiple streams of waterfalls, making it arguably the most heavenly place in the state. The neighboring regions and small villages that surround this place are breathtaking, making your holiday a perfect amalgamation of relaxation and discovery.",
                "Located in The Dharampuri District, in the southern state of Tamil nadu, Hogenakkal is a small village by the banks of River Kaveri. The quite little town is very famous for the Hogenakkal Falls, which are often touted as the Niagara Falls of India. The even flowing Kaveri River forks into multiple streams at Hogenakkal, making it one of the most spectacular waterfall in India.

                "
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "scNrGxMRnLs";
            $GLOBALS['img']        = array(
                "images/hogenakkal/1.jpg",
                "images/hogenakkal/2.jpg",
                "images/hogenakkal/3.jpg",
                "images/hogenakkal/4.jpg",
                "images/hogenakkal/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Hogenakkal Falls",
                "Melagiri Hills",
                "Mettur Dam",
                "Pennagram Village",
                "Crocodile Rehabilitation Centre"
            );
            $GLOBALS['imgContent'] = array(
                "Hogenakkal Falls is a scintillating waterfall that is located on river Kaveri in the Dharmapuri district of Tamil Nadu. The place gets its name from Hogenakkal, which means 'smoking rocks', owing to the unique rock arrangement that exists around it.",
                "The Melagiri Hills are the point where the Eastern and Western Ghats meet each other. With two mountain ranges converging from both the sides, and dense forests all around the place, the view is simply sublime.",
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et dignissim
                                mauris, ac Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et
                                dignissim",
                " The village is famous for its weekly fair that it holds every month to attract tourists. The village is also know for its brightly colored giant terracotta statues, which are known as Aiyanars.",
                "Crocodile rehabilitation centre was established in the year 1975. With an area of about 50 cents, the centre is located opposite to the Forest Cottage. Here, about 113 crocodiles are being maintained in 22 enclosures."
            );
            break;
            
            case "yercaud":
            $GLOBALS['title']      = "Yercaud";
            $GLOBALS['package']    = "Multi Day Package";
            $GLOBALS['content']    = array(
                "As a popular tourist destination, Yercaud is also called as Jewel of the South. Yercaud is as enchanting and picturesque as the hill stations on the Western ghats and trekking here can be one of the most pleasurable ways to pass time.",
                "Yercaud town got its name from the Yercaud Lake located at its center. In Tamil, Yeri means lake and Kaadu means forest. Stone-age implements have been found from the ancient shrine located near Shevaroy Hills, which is about 5 km from the Yercaud Lake. Sir Thomas Munroe, erstwhile governor of Madras Presidency in 1842 developed this place. David Cockburn, the Scottish collector of Salem district, between 1820 and 1829, was called the 'Father of Yercaud' because he helped in the development of the resources of the Shevaroy and for introducing the cultivation of coffee, pears and apple. Salem District was purchased by Mr. G.F. Fisher, the only European Zamindar, in 1836. The Tea plantation has been introduced in 1840s by Dr.Wallich on the property of G.F.Fischer."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "r-wYxa7odko";
            $GLOBALS['img']        = array(
                "images/yercaud/1.jpg",
                "images/yercaud/2.jpg",
                "images/yercaud/3.jpg",
                "images/yercaud/4.jpg",
                "images/yercaud/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "The 32-Km Loop Road",
                "Killiyur Falls",
                "Emerald Lake",
                "The Bear's cave",
                "Pagoda Point"
            );
            $GLOBALS['imgContent'] = array(
                "Among the many things to do in Yercaud is the drive around the 32 km loop road Yercaud. This road is particularly famous in the city for its typical hairpin turns and the long stretch of the road. ",
                                "This electrifying and spectacular cascade is in the neighborhood of Yercaud Lake and is at its finest when sojourned to after the monsoon months.",
                "The most alluring aspect of Yercaud is its big yet natural lake very popularly known as the Emerald Lake. Surrounded by some wonderful cloud-peaked hills and a well persevered garden on its banks, this lake is a feast for the eyes.",
                "The Bear's cave was named because beside this coffee estate bungalow, the caves were believed to house bears.Even though it is a private estate, the owner has been kind enough to open it for the visitors.",
                "Pagoda point is a beautiful viewpoint where one is treated to a panoramic view of the entire town of Salem as well as the neighbouring village of Kakambadi. The twists and turns of the 21 hairpin bends of Yercaud can be seen from this spot as they envelop themselves around the hills. "
            );
            break;  
            
            case "dubai":
            $GLOBALS['title']      = "Dubai";
            $GLOBALS['package']    = "International Tour Package";
            $GLOBALS['content']    = array(
                "Dubai is all about the futuristic charm of modern skyscrapers, legendary nightlife, exotic landscapes, and desert safaris. Lying on the Persian Gulf’s South-East coast, a tour to this largest and the most popular city of the UAE (United Arab Emirates) with our Dubai tour guide is going to be an experiential one. Being the Emirate of Dubai’s capital, it’s a city bustling with life. Burj Khalifa, Dubai Mall, Dubai Fort, and Palm Islands are top tourist places in Dubai. To plan your excursion well in advance, get a Dubai tourist map for yourself, and start exploring the city at your own pace!",
                "Discover the world's tallest building, shop 'til you drop in some of the world's largest shopping and entertainment destinations, uncover hidden gems in a traditional souk, or treat the family to fun-filled attractions, water and theme parks, all in a single Dubai sightseeing itinerary."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "2bLBm2ieSbU";
            $GLOBALS['img']        = array(
                "images/dubai/1.jpg",
                "images/dubai/2.jpg",
                "images/dubai/3.jpg",
                "images/dubai/4.jpg",
                "images/dubai/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "The Dubai Fountain",
                "Visit Dubai Discover  World Famous Attractions  At The Top, Burj Khalifa
                At The Top, Burj Khalifa",
                "Dubai Aquarium & Underwater Zoo",
                "Burj Al Arab",
                "The Dubai Mall"
            );
            $GLOBALS['imgContent'] = array(
                "Witness the tallest performing fountain in the world during your visit to Downtown Dubai. The Dubai Fountain offers a once-in-a-lifetime opportunity to immerse yourself in a captivating water, music and light experience",
                "Standing high above the city, you can experience what the world’s tallest skyscraper has to offer at viewing deck At The Top. Immerse yourself in the breathtaking views at Dubai’s most prime location.",
                "Don’t miss the giant 10 million-litre tank at the Dubai Aquarium and Underwater Zoo, which contains more than 33,000 aquatic animals and the largest collection of sand tiger sharks anywhere.",
                "One of Dubai’s most famous tourist landmarks, the Burj Al Arab often stands among the top five – if not the absolute peak – of the world’s most iconic hotels.",
                "Shopaholics will rejoice at The Dubai Mall - the world’s largest destination for shopping, entertainment and leisure located next to the world's tallest building, the Burj Khalifa."
            );
            break;
            
            case "oman":
            $GLOBALS['title']      = "Oman";
            $GLOBALS['package']    = "International Tour Package";
            $GLOBALS['content']    = array(
                "There is no better place to escape the endless heat and monotony of summer than Oman. Whether it’s walking along verdant terraced gardens and cool emerald pools, catching glimpses of turtles on a breezy, sandy beach, diving into blue seas to meet jewel coloured ﬁsh, stingrays and eels, or hiking the spectacular, chilly heights of Oman’s highest point to ﬁnd the perfect view of the ‘Grand Canyon of Arabia’; Oman has the perfect summer experience waiting for you. "
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "6zMuZKE8vQw";
            $GLOBALS['img']        = array(
                "images/oman/1.jpg",
                "images/oman/2.jpg",
                "images/oman/3.jpg",
                "images/oman/4.jpg",
                "images/oman/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Muscat",
                "Nizwa",
                "Wahiba Sands",
                "Musandam Fjords",
                "Jebel Akhdar"
            );
            $GLOBALS['imgContent'] = array(
                "Muscat is home to forts, palaces, museums and markets, offering something for everyone. While you can’t visit the interior of the Qasr Al Alam Royal Palace, you can head to the harbor to get a close view of the amazing structure.",
                "Nizwa is best known for its incredible fort, which was built in the 17th century under the direction of Sultan Bin Saif Al Ya’ribi.",
                "Wahiba Sands is a popular travel destination for those in search of the true, authentic and traditional Oman.",
                "The Musandam Fjords stretch north and offer spectacular views.you can do boat trips to explore the coasts and peaks rising up from the water, spotting dolphins from a Dhow, or traditional Omani boat, and scuba diving out at sea.",
                "Jebel Akhdar can be translated to Green Mountain, and it is a part of the Al Hajar Mountains. Don’t expect a traditional mountain top, and don’t let the green misnomer fool you. The Jebel Akhdar region is a primarily limestone, and contains the highest point in the entire country of Oman."
            );
            break;
            
            case "malasia":
            $GLOBALS['title']      = "Malaysia";
            $GLOBALS['package']    = "International Tour Package";
            $GLOBALS['content']    = array(
                "Dynamic cities, fabulous food, beautiful beaches, idyllic islands and national parks with wildlife-packed rainforests – all of this can be found in Malaysia. ",
                "The catchy tourism slogan ‘Malaysia, Truly Asia’ continues to ring true as this country really is a potpourri of Asian cultures. Muslim Malays, religiously diverse Chinese, and Hindu and Muslim Indians all muddle along with aboriginal groups (the Orang Asli) on Peninsular Malaysia and Borneo’s indigenous people, scores of tribes known collectively as Dayaks. Each ethnic group has its own language and cultural practices which you can best appreciate through a packed calendar of festivals and a delicious variety of cuisines.",
                "While the Peninsula flaunts bustling cities, tea plantations and beautiful colonial architecture, Malaysian Borneo comprises wild jungles, remote tribes, and granite peaks. The country presents a perfect balance of modern amenities and natural habitats."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "mtIeLsMbfzg";
            $GLOBALS['img']        = array(
                "images/malasia/1.jpg",
                "images/malasia/2.jpg",
                "images/malasia/3.jpg",
                "images/malasia/4.jpg",
                "images/malasia/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Pulau Perhentian",
                "Mt Kinabalu & Kinabalu National Park",
                "Chinatown, Merdeka Square & Bukit Nanas",
                "Semporna Archipelago",
                "Cameron Highlands"
            );
            $GLOBALS['imgContent'] = array(
                "The Perhentian islands are well developed with resorts and yet still have refreshing, crystal-clear waters that are perfect for swimming, diving and snorkelling. ",
                "Gunung Kinabalu, as it is known in Malay, is the highest mountain on the world's third-largest island. It is also the highest point between the Himalayas and New Guinea. ",
                "You don't have to look too hard to find traces of old KL in Chinatown's shophouse-lined streets, which border the confluence of the Klang and Gombak rivers.",
                "The stunning sapphire waters and emerald isles of the Semporna Archipelago, home to Bajau sea gypsies in Crayola-coloured boats, are plucked from your most vivid dreams of tropical paradise.",
                "Emerald tea plantations unfurl across Malaysia's largest hill-station area. Temperatures in these 1300m to 1829m heights rarely top 30°C, inspiring convoys of weekenders to enjoy tea and strawberries in the restorative climate. ",
            );
            break;
            
            case "thailand":
            $GLOBALS['title']      = "Thailand";
            $GLOBALS['package']    = "International Tour Package";
            $GLOBALS['content']    = array(
                "Thailand is a gorgeous country located at the centre of the Indochina peninsula in the mainland of South East Asia. The country shares borders with Laos and Cambodia in the East, Myanmar in the North, Anadman Sea in the west and with the Gulf of Thailand in the South. A mesmerizing destination, it covers an area of 513,120 sq kms.
                ",
                "This beautiful country is a potpourri of multiple cultures. From ascetic lifestyles of the monks to the throbbing nightlife and rave parties on the beaches, Thailand boasts of a wide spectrum of things."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "nx220GdkmVw";
            $GLOBALS['img']        = array(
                "images/thailand/1.jpg",
                "images/thailand/2.jpg",
                "images/thailand/3.jpg",
                "images/thailand/4.jpg",
                "images/thailand/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Krabi Beach",
                "Pattaya",
                "Erawan National Park",
                "Chiang Mai",
                "Koh Samui"
            );
            $GLOBALS['imgContent'] = array(
                "Krabi is the perfect holiday destination for those looking for a relaxing area in southern Thailand.a jungle-covered interior, towering limestone cliffs, caves, waterfalls and exotic wildlife, Krabi a great selection of natural assets that offer its visitors a wide array of leisure activities for the whole family.",
                "Pattaya is always switched on and fun. This vibrant coastal city shot to fame in early 1980s, and stayed there. From sunrise to sunset, Pattaya’s beaches are constantly brimming with life, as water sports lovers and sun worshippers take to the waters.",
                "Erawan National Park is in Thailand, northwest of Bangkok, near the Myanmar (Burma) border. It's known for Erawan Falls, which cascades down 7 tiers.",
                
                "Chiang Mai is a mix of beautiful scenery and the architectural reminders of its rich history particularly appeals to people looking for a more cultural experience on their holiday",
                "Koh Samui (Samui Island) is a cosmopolitan melting pot, attracting budget travellers staying for a month or two in simple beachside bungalows, to the wealthiest holidaymakers dropping in for a weekend at one of the many luxury resort or villa on the many white sand beaches of Koh Samui."
            );
            break;
            
            case "singapore":
            $GLOBALS['title']      = "Singapore";
            $GLOBALS['package']    = "International Tour Package";
            $GLOBALS['content']    = array(
                "Singapore is much more than the sum of its numerous attractions. It’s constantly evolving, reinventing, and reimagining itself, with people who are passionate about creating new possibilities.",
                "It’s where foodies, explorers, collectors, action seekers, culture shapers, and socialisers meet―and new experiences are created every day.",
                "Singapore is known as a bustling metropolis that also happens to be one of the cleanest and safest cities of its size in the world. (Just make sure you heed the local laws—something like spitting in the street might merely be considered rude in your hometown, but here, it carries a severe penalty.) You'll find historic sites like the Thian Hock Keng temple, superlative shopping (including gargantuan malls) and numerous beaches. "
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "ax51-HEgsuQ";
            $GLOBALS['img']        = array(
                "images/singapore/1.jpg",
                "images/singapore/2.jpg",
                "images/singapore/3.jpg",
                "images/singapore/4.jpg",
                "images/singapore/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Merlion Park",
                "Singapore Grand Prix",
                "Johor Bahru",
                "Chinatown",
                "Buddha Tooth Relic Temple & Museum"
            );
            $GLOBALS['imgContent'] = array(
"Standing at 8.6 metres high and weighing 70 tonnes, the Merlion statue has a lion’s head and a fish’s body, and is housed here in this 2,500 square metre park.",
"The Formula One Singapore Grand Prix was the inaugural F1 night race back in 2008, and has since been an annual event that car enthusiasts from all over the world look forward to watching in the month of September. ",
                               
"Johor Bahru is a Malaysian town that sits just across from the border with Singapore. As is the case with many border towns, it had a rather seedy reputation for years before cleaning up its act and developing a great range of new family friendly attractions that have helped its popularity to soar.",

                "Once an enclave for Singapore’s Chinese immigrant population, the Chinatown of today is much-beloved for its blend of old and new, with historic temples and traditional medicinal halls sitting alongside bold new bars and trendy lifestyle shops.",
                "Located in the historic district of Chinatown, the Buddha Tooth Relic Temple & Museum’s richly designed interiors and comprehensive exhibits on Buddhist art and history tell stories of culture over thousands of years old."
            );
            break;
            
            case "maldives":
            $GLOBALS['title']      = "Maldives";
            $GLOBALS['package']    = "International Tour Package";
            $GLOBALS['content']    = array(
                "The Maldives, where sands are white as the smiles of the locals, where fish swim happily in the warm waters of the Indian Ocean, where the weather is a dream, and the deep rays of the sun wait to engulf you in their arms.It is an archipelago of 1,192 coral islands grouped into natural atolls, out of which only a few are inhabited. Time stands still in the Maldives as you lie on the white sand beaches, hearing the crystal clear waves crash against the seashore, swim with the manta rays and reef sharks and feast on a wide array of fishes with the locals. The Maldives is ideal for an adventure, honeymoon or leisure holiday.
                ",
                "Floating on the translucent waters, Maldives is a divine paradise for those looking for a getaway from the daily humdrum of city life, with unparalleled beauty. With its sun-kissed beaches, palm-fringed islands, crystalline lagoons and pristine waters, Maldives enthrals and draws visitors all year round. Each resort generally occupies an entire atoll and are equipped with luxurious water villas. Imagine having a room on a pier jutting out from the shore with a glass floor under which tropical fish can be seen swimming!
               ",
               " 
               While the vivid blue lagoons are perfect for snorkelling, the reef walls offer a kaleidoscope of sea life for more experienced divers, making it a haven for water sports enthusiasts.
               
               The capital city of Male is both commercial and financial capital. Seat to the executive, legislature and judiciary, this city is a tourist favourite as well. The history lovers will be satiated here, given Male houses several buildings and monuments of historical importance. Male is easily accessible by ferry boats from the international airport. Travel to other islands in the Maldives is also quite feasible from Male due to the good ferry connectivity. Be it island hopping, candlelight dinner by the sea, breakfast ferry to an uninhabited island (yes, this is possible), scuba diving or even dolphin watching for all you leisure lovers, this idyllic holiday will never afford you an idle moment!
               "

            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "eFhqTD0qouw";
            $GLOBALS['img']        = array(
                "images/maldives/1.jpg",
                "images/maldives/2.jpg",
                "images/maldives/3.jpg",
                "images/maldives/4.jpg",
                "images/maldives/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Water Villas",
                "Waldorf Astoria Maldives Ithaafushi ",
                "Maldives Islands",
                "Male",
                "Ithaa Undersea Restaurant"
            );
            $GLOBALS['imgContent'] = array(
                "Water Villas, standalone bungalows positioned over the water. Usually, over-water bungalows are located close to shore, allowing for easy access to the main resort building, its beaches and amenities. The bungalows are linked to the mainland via long plank walkways",
                "Located in South Male Atoll, Waldorf Astoria Maldives Ithaafushi covers 3.5 km length of greenery and beaches spanning across 3 islands encircling a lagoon. This luxury hotel offers 11 unique dining venues including Chinese, Middle Eastern and a signature tree top restaurant.",
                "Maldives, a destination consisting of 26 oval-shaped atolls & over 1,000 coral islands, has established a reputation for itself as one of the exotic honeymoon destinations and for a good reason. ",
                "The island capital of the Maldives teems with high rises and narrow streets, all ringed by seawalls.The golden-domed Friday Mosque presides over the landscape, while the underwater riches of the atolls lure scuba enthusiasts from around the globe.",
                "Built 16 feet below the sea level, the Ithaa is undoubtedly the best Maldives undersea restaurant, which you need to visit. Offering 180 degree panoramic views of the beautiful sea life, this restaurant provides an absolutely unforgettable experience and is one-of-its-kind on the island."
            );
            break;
            
            case "china":
            $GLOBALS['title']      = "China";
            $GLOBALS['package']    = "International Tour Package";
            $GLOBALS['content']    = array(
                "Officially known as the People's Republic of China, China is the most populous state in the world, covering an area of approximately 9.6 million square kilometers. It is the world's second largest state by land area and currently the biggest communist country in the world.",
                "Needless to say, this place has many attractions to entice its visitors, the most popular being Beijing, the city of several dynasties, besides the spectacular imperial palaces, it also possesses the most luxurious royal gardens and dazzling shopping malls. Shanghai can be described as the showpiece in the booming economy of the country. Though the beauty of Shanghai doesn't lie in scurrying from sight to sight, it definitely lies in the feel of the city's modern atmosphere. ",
                "China is an intriguing nation with a lot to offer to a tourist, but consider your trip incomplete if you don't visit the Great Wall of China- an iconic symbol - being the longest wall in the world and one of the seven wonders. Another element that China is renowned for is authentic Chinese food, which is a much-savored cuisine and extensively available throughout the world.  "
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "pg4PITkBahU";
            $GLOBALS['img']        = array(
                "images/china/1.jpg",
                "images/china/2.jpg",
                "images/china/3.jpg",
                "images/china/4.jpg",
                "images/china/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "Great Wall of China",
                "Temple of Heaven",
                "Vietnam",
                "Temple of the Emerald Buddha",
                "Hawaii"
            );
            $GLOBALS['imgContent'] = array(
                "The Great Wall of China is one of the greatest sights in the world — the longest wall in the world, an awe-inspiring feat of ancient defensive architecture. Its winding path over rugged country and steep mountains takes in some great scenery.",
                "The Temple of Heaven Park, Tiantan in Chinese, is located in the Dongcheng District, Beijing. It is the largest and most representative existing masterpiece among China's ancient sacrificial buildings.",
                "A land of staggering natural beauty and cultural complexities, of dynamic megacities and hill-tribe villages, Vietnam is both exotic and compelling.",
                "Temple of the Emerald Buddha is regarded as the most sacred Buddhist temple in Thailand. The Emerald Buddha housed in the temple is a potent religio-political symbol and the palladium of Thailand. ",
                "Ecologically diverse and sparsely populated, the Big Island of Hawaii is larger than all the other better-known Hawaiian islands combined. Rental cars allow visitors to discover wonders from snow-capped mountains to rainforests to deserts. "
            );
            break;
            
            case "europe":
            $GLOBALS['title']      = "Europe";
            $GLOBALS['package']    = "International Tour Package";
            $GLOBALS['content']    = array(
                "The second smallest continent in the world, Europe covers 2% of the Earth’s surface and 6.7% of the Earth’s land. With 47 countries and a population of 742.5 million (2013 census), it is the third most populated continent in the world. Bordered by the Atlantic Ocean on the west, Arctic Ocean on the north, Ural mountains in the east, and the Mediterranean Sea to the South, a visit to the European continent is visually magnificent and historically significant. ",
                "While its history dates back to the advent of life on Earth, it’s influence first spread over the world with the reign of Alexander-The Great. Later of course a handful of the European countries as Britain, Portugal, France and the Dutch went on to rule most other countries of the world at different periods. In more recent times, Europe has been the center of both World Wars, and it is this upheaval in the continent that makes it historically compelling. ",
                "Home to some of the most prominent and captivating monuments and structures that are also listed as UNESCO world heritage sites, every part of Europe stands tall as a trying testimony of its glorious and disconcerted past. Distinctly divided into three regions- Western Europe, Central Europe, and Eastern Europe- each one is more enchanting that the other for a tourist. What adds to the continent’s charm is its diversified geographical bifurcation with the Scottish highlands in the northern parts, Hungarian plains down south, mountains in the Central Europe, and highlands in the southern area."
            );
            $GLOBALS['vedio']      = $GLOBALS['vedio'] . "UnKJL_ifwkk";
            $GLOBALS['img']        = array(
                "images/europe/1.jpg",
                "images/europe/2.jpg",
                "images/europe/3.jpg",
                "images/europe/4.jpg",
                "images/europe/5.jpg"
            );
            $GLOBALS['imgTitle']   = array(
                "France",
                "Switzerland",
                "London",
                "Belgium",
                "Germany"
            );
            $GLOBALS['imgContent'] = array(
                "Home to world-famous sites and host to major international events, France is a leading tourist market for the European travel industry. Both domestic and international tourism have a significant impact on the French economy. ",
                "A popular destination amongst tourists, especially from India. Tourism in Switzerland offers variety of sightseeing and entertainment options. The wide range of Switzerland tourism packages provided by MakeMyTrip allows the traveller to explore various Switzerland tourist places in comfort.",
                "London, From iconic and captivating cities to epic and unexpected countryside, with a  history where myths and legends collide",
                "The new and the historic effortlessly blend to give you an elegant old-world charm. The country is renowned for its numerous castles and landscaped gardens, variety of art museums and hip cafes. Its mouth-watering cuisine includes waffles, chocolates, steaming mussels, steak, french fries, and not to forget its famous beer.
                ",
                "A country of superior intellect and rich culture, Germany offers its travellers a well-rounded experience of beautiful architecture, a beautiful countryside, fun-filled festivals and the most brilliant, lip-smacking cuisine."
            );
            break;    

        
        default:
            header("Location: http://www.inspireholidays.in");
    }
    
    $GLOBALS['vedio'] = $GLOBALS['vedio'] . "?controls=0&&modestbranding=0&showinfo=0&rel=0&amp;start=10";
}
?>