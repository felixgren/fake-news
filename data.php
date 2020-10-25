<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.


$authors = [
    [
        'fullName' => 'Felix',
        'ID' => 1
    ],
    [
        'fullName' => 'Josef',
        'ID' => 2
    ]
];

$articles = [
    [
        'image' => 'https://i.kinja-img.com/gawker-media/image/upload/c_scale,f_auto,fl_progressive,pg_1,q_80,w_800/rxqv0gtluylqsy5ckqka.jpg',
        'imageAlt' => 'Neurosurgeon staring into the camera',
        'title' => 'Neurosurgeon Feels Lucky He Was Able To Turn Hobby Into Career',
        'content' => '<p>ROCHESTER, MN—Speaking with reporters about how lucky he feels to be pursuing his life’s passion full-time, local neurosurgeon Chris Monson said Wednesday he will always be grateful he found a way to turn his favorite hobby into a career. </p><p>A self-taught cerebrovascular surgeon who learned the craft in his spare time, Monson recalled how he started out by tinkering around on nights and weekends in his garage, where he would cut into human brains under the dim light of a single bare bulb and, whenever possible, convince reluctant family members to serve as guinea pigs.</p><p>“I just feel so blessed that what was once a simple pastime of cracking open a skull here and digging out a tumor there has blossomed into a profession,” said Monson, adding that the first 50 or 60 brains he worked on didn’t turn out too well, but through extensive trial and error, he eventually began to see “the lay of the land” and learn his way around the central nervous system. “It’s wild to think I’m making six figures for something I used to do for fun. In those early days, it honestly never occurred to me you could make a living at this.”</p><p>“Back then, I didn’t even care if the hammer slipped and I got a face full of cerebrospinal fluid,” Monson continued. “It was all a labor of love.”</p><p>As he sat in his office at the world-renowned Mayo Clinic, Monson reminisced about the long, difficult road to becoming the successful surgeon he is today. In the beginning, he didn’t even have access to proper tools, and his hands would reportedly shake every time he used a box cutter to make an incision or clipped off a bulging aneurysm with a rusty pair of wire cutters. With MRI and PET scan technology far beyond his reach, he had to “rope in a buddy and fire up the drill press every time [he] wanted to see what was going on under the hood.”</p>',
        'authorID' => 1,
        'publishedDate' => new DateTime('@1601562060'), //UNIX time stamp
        'likes' => 10
    ],
    [
        'image' => 'https://i.kinja-img.com/gawker-media/image/upload/c_scale,f_auto,fl_progressive,pg_1,q_80,w_800/o1mvoz4e4vlucohbor8z.jpg',
        'imageAlt' => 'A photoshopped pine tree on the surface of the moon with earth visible in the background',
        'title' => 'NASA Builds 4G Tower On Moon Tastefully Disguised As Pine Tree',
        'content' => '<p>WASHINGTON—Sharing impressive first images of the newly installed network, NASA officials confirmed Monday they had built a 4G tower on the moon tastefully disguised as a pine tree. “It’s a little taller than any other trees that would be growing on the moon, but we’re still confident it will blend right in,” said NASA administrator Jim Bridenstine, who explained the 150-foot cellular tower would aid the agency’s goal of establishing a sustained presence on the celestial body without compromising the lunar landscape’s natural beauty. “It’s as realistic as any conifer you could expect to see on a stroll across the moon. All those ugly antennae have been concealed by lifelike plastic branches and finely manicured acrylic pines needles. These professional designers are really good. It’s actually quite classy.” Bridenstine added the administration would also affix a replica bald eagle to the top of the tower to scare away pigeons.</p>',
        'authorID' => 1,
        'publishedDate' => new DateTime('@1601596800'),
        'likes' => 20
    ],
    [
        'image' => 'https://media3.giphy.com/media/ACVoiOEjbA6nC/giphy.gif',
        'imageAlt' => 'Cat dancing',
        'title' => 'Importance of bensträckare',
        'content' => 'Vincent: glöm inte att sträcka benen var 45e minut',
        'authorID' => 1,
        'publishedDate' => new DateTime('@1601683200'),
        'likes' => 30
    ],
    [
        'image' => 'https://media3.giphy.com/media/ACVoiOEjbA6nC/giphy.gif',
        'imageAlt' => 'Cat dancing',
        'title' => 'The fourth article',
        'content' => 'Bla bla bla',
        'authorID' => 2,
        'publishedDate' => new DateTime('@1601769600'),
        'likes' => 40
    ],
    [
        'image' => 'https://media3.giphy.com/media/ACVoiOEjbA6nC/giphy.gif',
        'imageAlt' => 'Cat dancing',
        'title' => 'The fifth article',
        'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos obcaecati blanditiis facilis expedita amet, quo id. Delectus perspiciatis provident voluptas et, placeat maxime aliquid? Quia dolore itaque praesentium. Optio, voluptatum!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos obcaecati blanditiis facilis expedita amet, quo id. Delectus perspiciatis provident voluptas et, placeat maxime aliquid? Quia dolore itaque praesentium. Optio, voluptatum!</p>',
        'authorID' => 2,
        'publishedDate' => new DateTime('@1601856000'),
        'likes' => 50
    ],
];
