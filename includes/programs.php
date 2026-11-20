<?php
// Program content for the three age bands. Each band coaches men and women,
// for strength and functional fitness, and gets its own page at /programs/{slug}.
// Claims here come from ../research/ — keep wording in line with those notes.
declare(strict_types=1);

const PROGRAMS = [
    'ages-25-plus' => [
        'title'    => 'Ages 25+',
        'headline' => 'Build the strength you\'ll live on for the next 50 years',
        'intro'    => 'Strength and functional fitness for men and women in their busiest years: career, family, sport. Get strong and capable now, and put muscle and bone in the bank for your 40s and beyond.',
        'card'     => 'Men and women. Learn the lifts, build real capacity, and bank muscle and bone for later decades.',
        'strength' => [
            'lead'   => 'Three or four sessions a week, about an hour each, that get harder over time. Skill and progress you can see, at home or in a gym.',
            'points' => [
                'Learn the main lifts properly: squat, hinge, push, pull, carry',
                'Progressive load with simple tracking, so results are obvious',
                'A periodized plan: blocks that build, peak and back off on purpose',
                'The same fundamentals you\'ll still use at 50 and 70',
            ],
        ],
        'functional' => [
            'lead'   => 'Functional fitness here means capacity for the life you have: lifting kids, carrying loads, playing sport and not getting hurt doing it.',
            'points' => [
                'Carries, lunges and single-leg work for strength you can use',
                'Conditioning that supports the lifting, not replaces it',
                'Mobility where you need it, not an hour of stretching',
                'Baseline tests now, so you have numbers to compare against later',
            ],
        ],
        'women' => [
            'lead'   => 'Women build muscle at a similar rate to men relative to their size. You get stronger, not bulky by accident.',
            'points' => [
                'No cycle-syncing plan. Current evidence doesn\'t show that cycle phase changes strength results',
                'Pregnancy and postpartum options, with your provider\'s okay and a gradual return',
                'Bone you build in your 20s and 30s is what you carry into the years after 45',
            ],
        ],
        'men' => [
            'lead'   => 'Most men lift most in these years, and many stop. The aim is a habit that outlasts the busy decade.',
            'points' => [
                'Strength and conditioning together, built around work and family',
                'Joint-friendly progressions so old sports injuries don\'t end the plan',
                'No testosterone or supplement pitches. Training, sleep and food are the work',
            ],
        ],
        'faq' => [
            ['Why start now if I feel fine?', 'The muscle and bone you build before 40 are what you bring into the decades after it. Learning to lift now is the easy version of staying strong later.'],
            ['Will lifting make me bulky?', 'Women gain muscle at a similar rate to men relative to their starting size, but less in absolute terms. Men gain size slowly and on purpose. Nobody gets bulky by accident.'],
            ['Should I train around my cycle?', 'An umbrella review of the research found no meaningful effect of cycle phase on strength or long-term gains. We adjust to how you actually feel that day, not to a phase calendar.'],
            ['Can I train while pregnant?', 'Guidance supports strength training in pregnancy for most people without complications. Get your provider\'s okay and we\'ll adapt the program. Heavy lifting in pregnancy is a separate, more careful conversation.'],
        ],
    ],
    'ages-40-plus' => [
        'title'    => 'Ages 40+',
        'headline' => 'Strong through midlife, and ready for what comes after',
        'intro'    => 'Strength and functional fitness for men and women in the decade when muscle, power and bone start to need real work. We teach you to lift, then progress you carefully through the changes of midlife.',
        'card'     => 'Men and women. Keep muscle, power and bone as midlife changes, with a plan that flexes when sleep and energy do.',
        'strength' => [
            'lead'   => 'Muscle and bone respond to progressive load at any age. In this decade it stops being optional.',
            'points' => [
                'Learn the main lifts first, with loads you can own',
                'Then add weight. Heavier work only when technique and your health allow it',
                'A little power work in every phase, because speed fades before strength does',
                'Three or four sessions a week, about an hour each',
            ],
        ],
        'functional' => [
            'lead'   => 'Functional fitness in midlife is about staying capable and resilient: joints that keep up, a back that holds up, and energy left at the end of the day.',
            'points' => [
                'Hinge, carry and single-leg strength for work, home and sport',
                'Balance and posture work, started before you need it',
                'Conditioning for heart and metabolic health alongside the lifting',
                'Retests every 8 to 12 weeks: grip, sit-to-stand, balance and the lifts',
            ],
        ],
        'women' => [
            'lead'   => 'The menopause transition often starts in the mid-to-late 40s, years before menopause itself. Training should already be underway.',
            'points' => [
                'The faster bone loss usually begins about a year before the final period. Lifting now means you meet that window stronger',
                'Plans that ease off when sleep is poor. We don\'t program by cycle phase',
                'No special menopause workout. Progressive strength training is what the evidence supports',
            ],
        ],
        'men' => [
            'lead'   => 'For men, change in this decade is gradual: a little less strength and power each year if nothing pushes back.',
            'points' => [
                'Strength and power work that keeps you quick, not just strong',
                'Joint-friendly loading for knees, shoulders and backs with history',
                'No testosterone program. Training, sleep and food are the work',
            ],
        ],
        'faq' => [
            ['I\'ve never lifted. Is it too late to start at 45?', 'No. Adults of every age get stronger with well-designed, progressive training. We start at your level and build up gradually.'],
            ['I\'m 45 and my cycles are still regular. Is this for me?', 'Yes. Menopause itself averages around 51, but the transition often begins in the mid-to-late 40s. The faster bone loss tends to start about a year before the final period. Starting now is how you arrive at that window already lifting.'],
            ['Is there a special menopause workout?', 'No. The research supports progressive strength training, plus some cardio. We change the plan to your sleep, joints and energy. We don\'t sell a menopause product or a hormone protocol.'],
            ['Do you work on testosterone?', 'We don\'t make testosterone claims and we don\'t sell hormone programs. What the evidence does support is getting stronger.'],
        ],
    ],
    'ages-55-plus' => [
        'title'    => 'Ages 55+',
        'headline' => 'Strong at 55, 70 and beyond',
        'intro'    => 'Strength and functional fitness for men and women who want more decades of an active, independent life. Strength, power and balance, with bone health and a safe start built in.',
        'card'     => 'Men and women. Strength, power and balance for an independent life, with a careful path for low bone density.',
        'strength' => [
            'lead'   => 'The work is the strength and speed you use to stand up, carry, climb and stay quick on your feet.',
            'points' => [
                'Compound lifts that match real life: squat or sit-to-stand, hinge, push, pull and carry',
                'A joint-friendly start, then more load as you earn it',
                'Heavier, supervised work for bone when your health allows it',
                'Three or four sessions a week, about an hour each',
            ],
        ],
        'functional' => [
            'lead'   => 'Functional fitness after 55 is independence: getting up from the floor, staying steady, reacting in time and carrying what you need to.',
            'points' => [
                'Power and balance practice aimed at staying steady and reacting in time',
                'Getting up and down from the floor, stairs and carries',
                'Retests every 8 to 12 weeks: sit-to-stand, grip, balance, walking speed and the lifts',
                'A health screen first, and a clear path to your doctor when something needs clearance',
            ],
        ],
        'women' => [
            'lead'   => 'Bone loss continues after menopause, so bone-focused training matters as much as muscle.',
            'points' => [
                'A supervised trial in postmenopausal women with low bone mass found carefully progressed heavy lifting improved bone density',
                'A slower, doctor-aware path if you have osteopenia, osteoporosis or a fracture history',
                'Protein targets to support muscle, unless your doctor has set a limit',
            ],
        ],
        'men' => [
            'lead'   => 'Fewer than one in four men over 65 meet the muscle-strengthening guideline. Many lifted when younger and stopped.',
            'points' => [
                'Power work, because moving quickly matters as much as lifting heavy',
                'Simple protein targets at meals, unless your doctor has set a lower limit',
                'No testosterone program. Training, sleep and food are the work',
            ],
        ],
        'faq' => [
            ['Am I too old to start?', 'No. Trials in adults in their 60s, 70s and older show strength and everyday function improve with well-designed training. We start at your level and build gradually.'],
            ['Is lifting heavy safe with low bone density?', 'A supervised trial in postmenopausal women with low bone mass found that carefully progressed heavy lifting improved bone density, with one minor setback under close coaching. We build up gradually and work with your doctor when bone density is already low.'],
            ['I have an old injury. Can I still train?', 'Usually, yes. We screen your history first and change the exercises. If something needs a doctor\'s okay, we\'ll say so before we start.'],
            ['How much time does it take?', 'Three or four sessions a week, about an hour each. That is enough to build strength, power and the capacity you use every day. Shorter public-health minimums are not the program we coach.'],
        ],
    ],
];

// Old audience URLs, kept so existing links still land somewhere sensible.
const PROGRAM_REDIRECTS = [
    'women-25'   => 'ages-25-plus',
    'women-45'   => 'ages-40-plus',
    'women-50'   => 'ages-40-plus',
    'men-60'     => 'ages-55-plus',
    'ages-25-39' => 'ages-25-plus',
    'ages-40-54' => 'ages-40-plus',
];
