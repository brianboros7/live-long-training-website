<?php
// Program content for the three audiences. Each one gets its own page at /programs/{slug}.
// Claims here come from research/ — keep wording in line with those notes.
declare(strict_types=1);

const PROGRAMS = [
    'men-60' => [
        'title'    => 'Men over 60',
        'headline' => 'Strong at 60, 70 and beyond',
        'intro'    => 'Stay independent, keep the sports and the work you care about, and feel capable day to day. Strength and power training for men who want more decades of an active life.',
        'card'     => 'Strength, power and balance for an independent life, with straight talk on food and recovery.',
        'strength' => [
            'lead'   => 'The work is the strength and speed you use to stand up, carry, climb and stay quick on your feet.',
            'points' => [
                'Compound lifts that match real life: squat or sit-to-stand, hinge, push, pull and carry',
                'Power and balance practice aimed at staying steady and reacting in time',
                'A joint-friendly start, then more load as you earn it',
                'Three or four sessions a week, about an hour each',
            ],
        ],
        'wellness' => [
            'lead'   => 'Muscle needs food and recovery, not a hormone pitch. We measure function so you can see what changed.',
            'points' => [
                'Simple protein targets at meals, unless your doctor has set a lower limit',
                'No testosterone program. Training, sleep and food are the work',
                'Retests every 8 to 12 weeks: sit-to-stand, grip, balance and the lifts themselves',
                'A health screen first, and a clear path to your doctor when something needs clearance',
            ],
        ],
        'faq' => [
            ['Am I too old to start?', 'No. Trials in adults in their 60s, 70s and older show strength and everyday function improve with well-designed training. We start at your level and build gradually.'],
            ['I have an old injury. Can I still train?', 'Usually, yes. We screen your history first and change the exercises. If something needs a doctor\'s okay, we\'ll say so before we start.'],
            ['Do you work on testosterone?', 'We don\'t make testosterone claims, and we don\'t sell hormone programs. Solid evidence that lifting meaningfully raises resting testosterone in older men is thin. What the evidence does support is getting stronger.'],
            ['How much time does it take?', 'Three or four sessions a week, about an hour each. That is enough to build strength, power and the capacity you use every day. Shorter public-health minimums are not the program we coach.'],
        ],
    ],
    'women-45' => [
        'title'    => 'Women over 45',
        'headline' => 'Strong through the change, and long after it',
        'intro'    => 'From the mid-40s on, the job is to keep muscle and bone while sleep, cycles and energy stop being predictable. We teach you to lift, then progress you carefully through perimenopause and the years after menopause.',
        'card'     => 'Progressive lifting for muscle and bone from the mid-40s on, with a plan that flexes when sleep and energy change.',
        'strength' => [
            'lead'   => 'Bone and muscle respond to progressive load. There is no special menopause workout hiding a different set of exercises.',
            'points' => [
                'Learn the main lifts first, with loads you can own',
                'Then add weight. Heavier work, in the style studied for bone, only when technique and your bone health allow it',
                'Balance, posture and a little power work in every phase',
                'Three or four sessions a week, about an hour each',
            ],
        ],
        'wellness' => [
            'lead'   => 'The transition often starts in the mid-to-late 40s, years before menopause itself. Training should already be underway, and the week has to bend when symptoms do.',
            'points' => [
                'The faster bone loss usually begins about a year before the final period. Lifting now means you meet that window stronger',
                'A slower, doctor-aware path if you have osteopenia, osteoporosis or a fracture history',
                'Plans that ease off when sleep is poor. We don\'t program by cycle phase',
                'Protein targets to support muscle. We will not promise to fix hot flashes, mood or hormones',
            ],
        ],
        'faq' => [
            ['I\'m 45 and my cycles are still regular. Is this for me?', 'Yes. Menopause itself averages around 51, but the transition often begins in the mid-to-late 40s. Bone density is usually fairly stable while cycles are still regular. The faster loss tends to start about a year before the final period. Starting now is how you arrive at that window already lifting.'],
            ['Is lifting heavy safe with low bone density?', 'A supervised trial in postmenopausal women with low bone mass found that carefully progressed heavy lifting improved bone density, with one minor setback under close coaching. We build up gradually, and we work with your doctor when bone density is already low. That trial does not mean every woman at 45 should jump to very heavy loads.'],
            ['Is there a special menopause workout?', 'No. The research supports progressive strength training, plus some cardio. We change the plan to your sleep, joints and energy. We don\'t sell a menopause product or a hormone protocol.'],
            ['Will this fix hot flashes?', 'Strength training may help some women with hot flashes. The studies are mostly in postmenopausal women, and the evidence is not strong enough to promise it. What we will do is build strength, look after bone, and keep the plan workable when sleep is poor.'],
        ],
    ],
    'women-25' => [
        'title'    => 'Women 25+',
        'headline' => 'Build the body you\'ll live in for the next 50 years',
        'intro'    => 'Efficient strength training for busy years: career, family, pregnancy, postpartum. Get stronger now, and put muscle and bone in the bank for your 40s.',
        'card'     => 'Three or four hours a week that build strength and confidence now, and bone you\'ll want after 45.',
        'strength' => [
            'lead'   => 'Three or four sessions a week, about an hour each, that get harder over time. The point is skill and progress you can see, at home or in a gym.',
            'points' => [
                'Learn the lifts properly. Confidence is the usual missing piece, not a special women\'s routine',
                'Progressive load with simple tracking, so results are obvious',
                'About an hour a session, scheduled around real life',
                'The same fundamentals you\'ll still use after 45',
            ],
        ],
        'wellness' => [
            'lead'   => 'Energy, pregnancy and postpartum change the week. We adjust to how you feel, and we treat today\'s training as savings for later.',
            'points' => [
                'No cycle-syncing plan. Current evidence doesn\'t show that cycle phase changes strength results',
                'Room to pull back on low-energy days without quitting the program',
                'Pregnancy and postpartum options, with your provider\'s okay and a gradual return',
                'Bone you build in your 20s and 30s is what you carry into the years after 45',
            ],
        ],
        'faq' => [
            ['Will lifting make me bulky?', 'Women build muscle at a similar rate to men relative to their size, but gain less in absolute terms. You get stronger. You don\'t get bulky by accident.'],
            ['Should I train around my cycle?', 'An umbrella review of the research found no meaningful effect of cycle phase on strength or long-term gains. We adjust to how you actually feel that day, not to a phase calendar.'],
            ['Can I train while pregnant?', 'Guidance supports strength training in pregnancy for most people without complications. Get your provider\'s okay and we\'ll adapt the program. Heavy lifting in pregnancy is a separate, more careful conversation.'],
            ['Why start this young if I feel fine?', 'The bone and muscle you build in your 20s and 30s are what you bring into your 40s, and life only gets busier. Later coaching assumes you already know how to lift. Starting now is the easier version of that future.'],
        ],
    ],
];
