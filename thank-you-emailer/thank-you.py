file = open('gifts.csv', 'r')
lines = file.readlines()

for line in lines:
    line = line.strip()
    name, gift, email = line.split(',')

    subject = 'Thank you for the gift'
    message = 'dear ' + name + ' thank you for the ' + gift + ' it means a lot to me. Happy New Year!'

    print(message)

    msg = EmailMessage()
    msg.set_content(message)
    msg['From'] = 'omcdonough24@hanoverstudents.org'
    msg['To'] = email

    with smtplib.SMTP_SSL('smtp.gmail.com', 465) as server:
        print('Authenticating...')
        server.login('mcdonough.122505.owen@gmail.com', 'YOUR PASSWORD HERE')
        print('sending...')
        server.send_message(msg)
        server.quit()
        print('Message sent!')
