USE garisstart;

CREATE TABLE users (email VARCHAR(255), password VARCHAR(255));
CREATE USER 'web'@'%' IDENTIFIED BY 'dAx5f5yyRFucP5HFVVoJ4MMBSen4gNYafSoiRus06EsMvuf2mi';

GRANT SELECT ON garisstart.users to 'web'@'%';
FLUSH PRIVILEGES;
