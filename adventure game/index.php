<?php

/*********************************************************************
 * Author: Stijn Goedemans
 * Date: 25-03-2026
 * Description: .
 * Version: 1.0
 **********************************************************************/

// Create variable win, a nice string to show when user wins
// Concatinate with .
// \n is an enter
//start of the game
printf("1. you find yourself in a barren wasteland\n");
printf("1. search you're surroundings\n");
printf("2. cry\n");
$choise = readline("what do you do?");

if ($choise == 1) {
    printf("you find a small village\n");
    printf("1. investigate the village\n");
    printf("2. ignore the village\n");
    $choise = readline("what do you do?");
    if ($choise == 1) {
        printf("you find a blacksmith who offers you some supply's\n");
        printf("1. take the supplies\n");
        printf("2. decline the offer\n");
        $choise = readline("what do you do?");
        if ($choise == 1) {
            printf("you take the supplies and gear up\n");
            printf("1. venture forth\n");
            printf("2. stay in the village\n");
            $choise = readline("what do you do?");
            if ($choise == 1) {
                printf("you venture forth and come face to face waith some monsters\n");
                printf("1. fight the monster\n");
                printf("2. run away\n");
                $choise = readline("what do you do?");
                if ($choise == 1) {
                    printf("you fight the monster and win!\n");
                    printf("they dropped some loot wich could come in handy!\n");
                    printf("1. take the loot and return to the village\n");
                    printf("2. take the loot and venture forth\n");
                    $choise = readline("what do you do?");
                    if ($choise == 1) {
                        printf("you return to the village and live a peaceful life\n");
                        printf("you win!");
                    } else {
                        printf("you venture forth and find a troll\n");
                        printf("1. you fight the troll\n");
                        printf("2. you greet the troll\n");
                        $choise = readline("what do you do?");
                        if ($choise == 1) {
                            printf("you fight the troll but he overpowers you\n");
                            printf("you die by the hands of the troll\n");
                            printf("game over!");
                        } else {
                            printf("you greet the troll and find out he wants to help you out\n");
                            printf("1. you accept the trolls help\n");
                            printf("2. you decline the trolls help\n");
                            $choise = readline("what do you do?");
                            if ($choise == 1) {
                                printf("you accept the trolls help and he helps you get some items\n");
                                printf("you make a home and live a peaceful life\n");
                                printf("you win!");
                            } else {
                                printf("you decline the trolls help and venture forth alone\n");
                                printf("you come face to face with an ogre\n");
                                printf("the ogre smashes you, wich leads to you're demise\n");
                                printf("game over!\n");
                            }
                        }
                    }
                } else {
                    printf("you run away but the monsters catch up to you\n");
                    printf("you die by the hands of these terrible creatures\n");
                    printf("game over!");
                }
            } else {
                printf("you stay in the village and live a peaceful life\n");
                printf("you win!");
            }
        } else {
            printf("you decline the offer and continue your journey\n");
            printf("underway you come across a group of bandits\n");
            printf("they attack you and you are defeated\n");
            printf("game over!");
        }
    } else {
        printf("you ignore the village\n");
        printf("you continue your journey but come across a dangerous creature\n");
        printf("you try to fight it but without any items you quikly get overpowered and perish\n");
        printf("game over!");
    }
} else {
    printf("you cry and create a pool of water\n");
    printf("1. drink from the pool\n");
    printf("2. ignore the pool\n");
    $choise = readline("what do you do?");
    if ($choise == 2) {
        printf("you ignore the pool and continue your journey\n");
        printf("you come across a huge wall to a city named Orgrimmar\n");
        printf("1. you try to climb the wall\n");
        printf("2. you look for a gate\n");
        $choise = readline("what do you do?");
        if ($choise == 1) {
            printf("you try to climb the wall but fail to notice the spikes on the wall\n");
            printf("you get injured by the spikes and fall\n");
            printf("you get impaled on the other spikes and you die a slow and agonizing death\n");
            printf("game over!");
        } else {
            printf("you look for a gate and find one\n");
            printf("you enter the city and find a job\n");
            printf("you live a peaceful life in the city\n");
            printf("you win!");
        }
    } else {
        printf("you drink from the pool and feel strange\n");
        printf("you tumble over and succumb to a disease!\n");
        printf("game over!");
    }
}
