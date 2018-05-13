<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class YasnaController extends Controller
{

    // general data needed in every page
    public $switches = [
        "site_title" => "Yasna Group" , //title of the page in browser
        "site_logo_black"=>"assets/images/logo.png", //site logo
        "site_logo_white"=>"assets/images/logo-white.png", //site logo
        "login"=>"#login", //login button href
        "customers_title"=> "Our Customers", //customers section title text
        "about_title" => "Meet our team", //about section title text
        "about-group"=>[
            "src"=>"assets/images/team.jpg", //image of team or company
            "subtitle" =>"web development", //subtitle of the company
            "title"=>"Yasna Group", //company name

            //stroy of the company
            "story"=>" Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse"
        ],
        //contact section information
        "contact_info"=>[
            "address"=>"Lorem ipsum dolor sit amet
                         consectetur adipisicing elit
                         sed do eiusmod. No.7",
            "phone"=>"021-23605606",
            "email"=>"service@gmail.com"
        ],
        //contact section related links
        //title and url of links
        "related_links1"=>[
            [
                "title"=>"link1",
                "href"=>"#link1"
            ],
            [
                "title"=>"link2",
                "href"=>"#link2"
            ],
            [
                "title"=>"link3",
                "href"=>"#link3"
            ],
            [
                "title"=>"link4",
                "href"=>"#link4"
            ]
        ],
        "related_links2"=>[
            [
                "title"=>"link1",
                "href"=>"#link1"
            ],
            [
                "title"=>"link2",
                "href"=>"#link2"
            ],
            [
                "title"=>"link3",
                "href"=>"#link3"
            ]
        ],

        //social links of the company
        // url and a fontawesome icon name (no "fa" or "fa-" before needed)
        "footer-links"=>[
            [
                "link"=>"#twitter",
                "font-o"=>"twitter"
            ],
            [
                "link"=>"#facebook",
                "font-o"=>"facebook"
            ],
            [
                "link"=>"#github",
                "font-o"=>"github"
            ],
            [
                "link"=>"#rss",
                "font-o"=>"rss"
            ],
        ],

        //languages available
        //title and abbreviation
        //abbreviation is set for data attr
        "languages"=>[
            [
                "name"=>"English",
                "data"=>"en",
                "link"=>""
            ],
            [
                "name"=>"فارسی",
                "data"=>"fa",
                "link"=>""
            ],
            [
                "name"=>"عربی",
                "data"=>"ar",
                "link"=>""
            ],
        ]

    ];


    //index view function
    public function index()
    {

        $switches = $this->switches;

        //services section data
        $services=[
            "class"=>"", //passing class is optional
            "title" => "LOOK LIKE AN EXPERT RIGHT FROM THE START." , //tittle or motto of service
            "subtitle" => 'AWARD-WINNING DESIGN', //service subtitle
            //service short description
            "text" => 'Blah Blah Our award-winning templates are the most beautiful way to present 
                                your ideas online. Stand out with a 
                                professional website, portfolio, or online store.',

            "href"=>"#service", //service link to read more
            "btn_class"=>"black-border", //btn custom class
            //service media small slider
            //gets slide image src
            "small_slider" => [
                'assets/images/slide1.jpg',
                'assets/images/slide2.jpg',
                'assets/images/slide3.jpg',
                'assets/images/slide4.jpg'
            ]
        ];

        //home page fullscreen slide show data
        $slideshow = [
            [
                'type'=>'normal', //slide type
                'class'=>'cap-top-right dark-bg', //slide custom classes
                'src'=>'assets/images/slide5.jpg', //slide image src
                'alt'=>'urban', //slide image alt
                'title'=>'heading example', //slide main title
                'headline'=>'Free trial. No credit card required.', //slide motto (optional)
                'href'=>'#slide' //slide button url ( optional )
            ],
            [
                'type'=>'normal',
                'class'=>'cap-top-right light-bg',
                'src'=>'assets/images/slide1.jpg',
                'alt'=>'urban',
                'title'=>'Build your own website',
                'headline'=>'Free trial. No credit card required.',
                'href'=>'#slide'
            ],
            [
                'type'=>'normal',
                'class'=>'cap-top-left dark-bg',
                'src'=>'assets/images/slide2.jpg',
                'alt'=>'urban',
                'title'=>'heading example',
                'headline'=>'Free trial. No credit card required.',
                'href'=>'#slide'
            ],
            [
                'type'=>'normal',
                'class'=>'cap-center dark-bg',
                'src'=>'assets/images/slide3.jpg',
                'alt'=>'urban',
                'title'=>'heading example',
                'headline'=>'Free trial. No credit card required.',
                'href'=>'#slide'
            ],
            [
                'type'=>'normal',
                'class'=>'cap-top-left dark-bg',
                'src'=>'assets/images/slide4.jpg',
                'alt'=>'urban',
                'title'=>'heading example',
                'headline'=>'Free trial. No credit card required.',
                'href'=>'#slide'
            ],
            [
                'type'=>'btn',//slide type 2
                'src'=>'assets/images/slide6.jpg',
                'alt'=>'urban',
                'title'=>'heading example',
                'description'=>'User experience design (UX, UXD, UED or XD) 
                                is the process of enhancing user satisfaction with a product
                                 by improving the usability, accessibility,
                                  and pleasure provided in the interaction with the product.',
                'href'=>'#slide'
            ]
        ];

        //customer section logobar data
        $logobar =[
            [
                'logo-src'=>'assets/images/logo/logo1.jpg', //logo image src
                'product-src'=>'assets/images/sample.jpg', //product image src
                'product-name'=> 'product 1', //product title
                //product description
                'product-data'=>'New New New New New New Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip',
                //link to product(optional)
                'product-link'=>''
            ],
            [
                'logo-src'=>'assets/images/logo/logo2.jpg',
                'product-src'=>'assets/images/sample2.jpg',
                'product-name'=> 'product 2',
                'product-data'=>'New New New New New New Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip',
                'product-link'=>'#link'
            ],
            [
                'logo-src'=>'assets/images/logo/logo3.jpg',
                'product-src'=>'assets/images/sample.jpg',
                'product-name'=> 'product 3',
                'product-data'=>'New New New New New New Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip',
                'product-link'=>'#link'
            ],
            [
                'logo-src'=>'assets/images/logo/logo8.png',
                'product-src'=>'assets/images/sample2.jpg',
                'product-name'=> 'product 8',
                'product-data'=>' aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    New New New New New New Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna',
                'product-link'=>'#link'
            ],
            [
                'logo-src'=>'assets/images/logo/logo4.jpg',
                'product-src'=>'assets/images/sample.jpg',
                'product-name'=> 'product 4',
                'product-data'=>' New Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip',
                'product-link'=>'#link'
            ],
            [
                'logo-src'=>'assets/images/logo/logo5.jpg',
                'product-src'=>'assets/images/sample2.jpg',
                'product-name'=> 'product 5',
                'product-data'=>'New New New New New New Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip',
                'product-link'=>'#link'
            ],
            [
                'logo-src'=>'assets/images/logo/logo6.jpg',
                'product-src'=>'assets/images/sample.jpg',
                'product-name'=> 'product 6',
                'product-data'=>' consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip',
                'product-link'=>'#link'
            ],
            [
                'logo-src'=>'assets/images/logo/logo7.jpg',
                'product-src'=>'assets/images/sample2.jpg',
                'product-name'=> 'product 7',
                'product-data'=>'New New New New New New Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip',
                'product-link'=>'#link'
            ],
        ];

        //profile cards data
        $profile_cards = [
            [
                "thumbnail_src" =>"assets/images/profile.jpg", //profile card image thumbnail
                "name"=>"john doe", //profile name
                "title"=>"Art director", //job title
                "socials"=>[ //social links and font awesome name
                    "twitter"=>[
                        "link" => "#twitter",
                        "font-o" => "twitter"
                    ],
                    "linkedin"=>[
                        "link" => "#linkedin",
                        "font-o" => "linkedin"
                    ],
                    "github"=>[
                        "link" => "#github",
                        "font-o" => "github"
                    ],
                    "facebook"=>[
                        "link" => "#facebook",
                        "font-o" => "facebook"
                    ],
                    "telegram"=>[
                        "link" => "#telegram2",
                        "font-o" => "telegram"
                    ],
                ],
                "original_src"=>"assets/images/profile.jpg", //profile card image
                //personal story
                "story"=>"This Is Negar's story Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo"

            ],
            [
                "thumbnail_src" =>"assets/images/profile.jpg",
                "name"=>"john doe",
                "title"=>"Art director",
                "socials"=>[
                    "twitter"=>[
                        "link" => "#twitter",
                        "font-o" => "twitter"
                    ],
                    "linkedin"=>[
                        "link" => "#linkedin",
                        "font-o" => "linkedin"
                    ],
                    "github"=>[
                        "link" => "#github",
                        "font-o" => "github"
                    ],
                    "facebook"=>[
                        "link" => "#facebook",
                        "font-o" => "facebook"
                    ],
                    "telegram"=>[
                        "link" => "#telegram2",
                        "font-o" => "telegram"
                    ],
                ],
                "original_src"=>"assets/images/profile.jpg",
                "story"=>"This Is Negar's story Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo"

            ],
            [
                "thumbnail_src" =>"assets/images/profile.jpg",
                "name"=>"john doe",
                "title"=>"Art director",
                "socials"=>[
                    "twitter"=>[
                        "link" => "#twitter",
                        "font-o" => "twitter"
                    ],
                    "linkedin"=>[
                        "link" => "#linkedin",
                        "font-o" => "linkedin"
                    ],
                    "github"=>[
                        "link" => "#github",
                        "font-o" => "github"
                    ],
                    "facebook"=>[
                        "link" => "#facebook",
                        "font-o" => "facebook"
                    ],
                    "telegram"=>[
                        "link" => "#telegram2",
                        "font-o" => "telegram"
                    ],
                ],
                "original_src"=>"assets/images/profile.jpg",
                "story"=>"This Is Negar's story Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo"

            ],
            [
                "thumbnail_src" =>"assets/images/profile.jpg",
                "name"=>"john doe",
                "title"=>"Art director",
                "socials"=>[
                    "twitter"=>[
                        "link" => "#twitter",
                        "font-o" => "twitter"
                    ],
                    "linkedin"=>[
                        "link" => "#linkedin",
                        "font-o" => "linkedin"
                    ],
                    "github"=>[
                        "link" => "#github",
                        "font-o" => "github"
                    ],
                    "facebook"=>[
                        "link" => "#facebook",
                        "font-o" => "facebook"
                    ],
                    "telegram"=>[
                        "link" => "#telegram2",
                        "font-o" => "telegram"
                    ],
                ],
                "original_src"=>"assets/images/profile.jpg",
                "story"=>"This Is Negar's story Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo"

            ],
            [
                "thumbnail_src" =>"assets/images/profile.jpg",
                "name"=>"john doe",
                "title"=>"Art director",
                "socials"=>[
                    "twitter"=>[
                        "link" => "#twitter",
                        "font-o" => "twitter"
                    ],
                    "linkedin"=>[
                        "link" => "#linkedin",
                        "font-o" => "linkedin"
                    ],
                    "github"=>[
                        "link" => "#github",
                        "font-o" => "github"
                    ],
                    "facebook"=>[
                        "link" => "#facebook",
                        "font-o" => "facebook"
                    ],
                    "telegram"=>[
                        "link" => "#telegram2",
                        "font-o" => "telegram"
                    ],
                ],
                "original_src"=>"assets/images/profile.jpg",
                "story"=>"This Is Negar's story Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo"

            ],
            [
                "thumbnail_src" =>"assets/images/profile.jpg",
                "name"=>"john doe",
                "title"=>"Art director",
                "socials"=>[
                    "twitter"=>[
                        "link" => "#twitter",
                        "font-o" => "twitter"
                    ],
                    "linkedin"=>[
                        "link" => "#linkedin",
                        "font-o" => "linkedin"
                    ],
                    "github"=>[
                        "link" => "#github",
                        "font-o" => "github"
                    ],
                    "facebook"=>[
                        "link" => "#facebook",
                        "font-o" => "facebook"
                    ],
                    "telegram"=>[
                        "link" => "#telegram2",
                        "font-o" => "telegram"
                    ],
                ],
                "original_src"=>"assets/images/profile.jpg",
                "story"=>"This Is Negar's story Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo"

            ],

        ];

        //header class for when background is dark
        $header_class = "";

        //introduction section
        $introData = [
            "main_heading"=>"Services",
            "services"=>[
                [
                    "service_icon"=>"assets/images/icons/icon-design.png",
                    "service_title"=>"Design",
                    "service_caption"=>"Nihil essent ad eos, in scaevola interpretaris his. Cum te quando 
                   ."
                ],
                [
                    "service_icon"=>"assets/images/icons/icon-headphones.png",
                    "service_title"=>"Design",
                    "service_caption"=>"Nihil essent ad eos, in scaevola interpretaris his. Cum te quando 
                   ."
                ],
                [
                    "service_icon"=>"assets/images/icons/icon-mobile-dev.png",
                    "service_title"=>"Design",
                    "service_caption"=>"Nihil essent ad eos, in scaevola interpretaris his. Cum te quando 
                   ."
                ],
                [
                    "service_icon"=>"assets/images/icons/icon-service.png",
                    "service_title"=>"Design",
                    "service_caption"=>"Nihil essent ad eos, in scaevola interpretaris his. Cum te quando 
                   ."
                ],
                [
                    "service_icon"=>"assets/images/icons/icon-web-dev_F1OpwKr.png",
                    "service_title"=>"Design",
                    "service_caption"=>"Nihil essent ad eos, in scaevola interpretaris his. Cum te quando 
                    ."
                ],
                [
                    "service_icon"=>"assets/images/icons/icon-design.png",
                    "service_title"=>"Design",
                    "service_caption"=>"Nihil essent ad eos, in scaevola interpretaris his. Cum te quando 
                    ."
                ]
            ]
        ];

        $whyus = [
            "main_heading"=>"why us?",
            "reasons"=>[
                [
                    "image"=>"assets/images/icons/icon-service.png",
                    "icon_name"=>"check-square-o",
                    "title"=>"interesset",
                    "text"=>"Graeci ocurreret interesset te nec, mel in congue fabellas definitiones. 
                    No mei facilisi corrumpit dissentias, ei vero aeterno fabulas vis, an accusata recteque explicari per. "
                ],
                [
                    "image"=>"",
                    "icon_name"=>"check-square-o",
                    "title"=>"probatus",
                    "text"=>"Graeci ocurreret interesset te nec, mel in congue fabellas definitiones.
                    No mei facilisi corrumpit dissentias, ei vero aeterno fabulas vis, an accusata recteque explicari per. "
                ],
                [
                    "image"=>"",
                    "icon_name"=>"check-square-o",
                    "title"=>"interesset",
                    "text"=>"Graeci ocurreret interesset te nec, mel in congue fabellas definitiones. No mei facilisi corrumpit dissentias,
                     ei vero aeterno fabulas vis, an accusata recteque explicari per. "
                ]
            ]

        ];

        $locale = getLocale();


        return view('yasna.index.index' , compact('switches','services', 'slideshow', 'logobar', 'profile_cards','locale','header_class','introData','whyus'));
    }

    public function blogposts()
    {
        $switches = $this->switches;

        //page title
        $data = [
            "site_title"=>"Yasna Group::Blog"
        ];

        //header class for when background is dark
        $header_class = "has-dark-bg";

        //header navbar
        $navbar=[
            [
                "title"=>"terms of service",
                "href"=>"#navlink"
            ],
            [
                "title"=>"privacy",
                "href"=>"#navlink"
            ],
            [
                "title"=>"acceptable use",
                "href"=>"#navlink"
            ],
            [
                "title"=>"cookies",
                "href"=>"#navlink"
            ],
            [
                "title"=>"copyright",
                "href"=>"#navlink"
            ],
            [
                "title"=>"image terms",
                "href"=>"#navlink"
            ],

        ];

        //list-view blog Page "main title", "second tile" and "image src(image is optional)"
        $listview=[
            "main_title"=>"List View",
            "hero_img"=>"",
            "post_title"=>"Posts"
        ];


        //posts cards
        $posts= [
        [
            //link to the post
            "post_link"=>"#post",
            //column view type
            "column"=> 2,
            //thumbnail src
            "thumbnail-img"=>"assets/images/sample2.jpg",
            //category name
            "category"=>"code",
            //link to the category
            "category-link"=>"#code",
            //title of the post
            "title"=>"Post Title",
            //abstract of the post
            "abstract"=>"Squarespace provides you with a comprehensive set of marketing
                                tools to engage with your audience, get found
                                across search and social, and grow your following.",
            //image src of author of the post
            "author_img"=>"assets/images/author.jpg",
            //name of the author of the post
            "author-name"=>"john Doe",
            //date of post
            "date"=>"24 Apr 2017"
        ],
        [
            "post_link"=>"#post",
            "column"=> 2,
            "thumbnail-img"=>"assets/images/sample.jpg",
            "category"=>"code",
            "category-link"=>"#code",
            "title"=>"Post Title",
            "abstract"=>"Squarespace provides you with a comprehensive set of marketing
                                tools to engage with your audience, get found
                                across search and social, and grow your following.",
            "author_img"=>"assets/images/author.jpg",
            "author-name"=>"john Doe",
            "date"=>"24 Apr 2017"
        ],
        [
            "post_link"=>"#post",
            "column"=> 2,
            "thumbnail-img"=>"assets/images/sample3.jpg",
            "category"=>"code",
            "category-link"=>"#code",
            "title"=>"Post Title",
            "abstract"=>"Squarespace provides you with a comprehensive set of marketing
                                tools to engage with your audience, get found
                                across search and social, and grow your following.",
            "author_img"=>"assets/images/author.jpg",
            "author-name"=>"john Doe",
            "date"=>"24 Apr 2017"
        ],
        [
            "post_link"=>"#post",
            "column"=> 2,
            "thumbnail-img"=>"assets/images/sample2.jpg",
            "category"=>"code",
            "category-link"=>"#code",
            "title"=>"Post Title",
            "abstract"=>"Squarespace provides you with a comprehensive set of marketing
                                tools to engage with your audience, get found
                                across search and social, and grow your following.",
            "author_img"=>"assets/images/author.jpg",
            "author-name"=>"john Doe",
            "date"=>"24 Apr 2017"
        ],
        [
            "post_link"=>"#post",
            "column"=> 1,
            "thumbnail-img"=>"assets/images/slide2.jpg",
            "category"=>"code",
            "category-link"=>"#code",
            "title"=>"Post Title",
            "abstract"=>"Squarespace provides you with a comprehensive set of marketing
                                tools to engage with your audience, get found
                                across search and social, and grow your following.",
            "author_img"=>"assets/images/author.jpg",
            "author-name"=>"john Doe",
            "date"=>"24 Apr 2017"
        ]
    ];


        return view('yasna.blog-posts.list-view.0blog-list-view', compact('data','switches','header_class',
                    'navbar','listview','posts'
                ));
    }

    public function article()
    {
        $switches = $this->switches;

        //site title in browser
        $data = [
            "site_title"=>"Yasna Group::Blog"
        ];
        $header_class = "has-dark-bg";


        $navbar=[
            [
                "title"=>"terms of service",
                "href"=>"#navlink"
            ],
            [
                "title"=>"privacy",
                "href"=>"#navlink"
            ],
            [
                "title"=>"acceptable use",
                "href"=>"#navlink"
            ],
            [
                "title"=>"cookies",
                "href"=>"#navlink"
            ],
            [
                "title"=>"copyright",
                "href"=>"#navlink"
            ],
            [
                "title"=>"image terms",
                "href"=>"#navlink"
            ],

        ];

        $listview = [
            "main_title"=>"single page",
            "hero_img"=>"",
            "post_title"=>"heading example"
        ];

        //article data
        $post=[
            "date"=>"20 september 2017",
            "author"=>"John Doe",
            "author_link"=>"#author",
            "sharing_title"=>"Example",
            "posturl"=>'http://www.example.com/page.html'
        ];


        return view('yasna.blog-posts.single.0single', compact('listview','switches','data','header_class',
            'contact_type','navbar','post'
        ));
    }

    public function test(Request $request)
    {
     dd($request->toArray());
    }


}
