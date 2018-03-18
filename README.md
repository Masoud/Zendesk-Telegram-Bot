# Telegram Bot for sending Zendesk's tickets to Telegram
This bot send all of your tickets from support system of [Zendesk]( https://www.zendesk.com/) to your telegram channel (or your ID).

# Installation
For using this bot, you should add some settings in your Zendesk account and activate your telegram Webhook for that bot.
<br />
1-	Go to "settings" in your Zendesk account and add an Extension for ["HTTP Target Service"]( https://support.zendesk.com/hc/en-us/articles/204890268-Creating-webhooks-with-the-HTTP-target) and insert your Telegram bot URL.<br />
2-	Then you should go to ["Triggers"]( https://support.zendesk.com/hc/en-us/articles/203662106-Creating-triggers-for-ticket-updates-and-notifications) settings and add a new trigger for any type of sent tickets and put your "Notify Target" on the new Extension that you created.<br />
3-	Upload project's files on your server and set up your Webhook from [there]( https://core.telegram.org/bots/api#setwebhook).<br />
4-	You can change your default information about the bot and Telegram channel (or your ID) in Tickets.php file.
