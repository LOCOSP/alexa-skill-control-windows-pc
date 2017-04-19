# alexa-skill-control-windows-pc
Simple Alexa skill working like a bridge with EventGhost on Windows PC



Intent-Schema.json: 

Example of Intent Schema for Alexa Skill.
This code should be paste is Interaction Model section.

As You see there is one Intent named "OPENBROWSER" if You need to create more just copy section
{
      "intent": "OPENBROWSER"
    }

and paste it just below adding a comma between them, just like here

{
      "intent": "OPENBROWSER"
    },
{
      "intent": "CLOSEBROWSER"
    }
  




Utterances.txt:

This file contains possible utterances You can say to Alexa for every Intents.
In our example for Intent "OPENBROWSER" I've created:
OPENBROWSER Open browser
OPENBROWSER Open Chrome
OPENBROWSER Open new browser window
OPENBROWSER browse Internet

If You followed Intent-Schema.json example by adding another Intent named "CLOSEBROWSER" should create Utterances for this Intent like here:
CLOSEBROWSER Close browser
CLOSEBROWSER Close Chrome
CLOSEBROWSER Close Internet browser
CLOSEBROWSER End browsing 

etc.
