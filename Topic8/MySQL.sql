create table `Transaction` (
`transactionId`int(30) AUTO_INCREMENT,
`userNumber`int(10),
`transactionType` enum ('incoming', 'outgoing'),
`date` date,
`amount`int(20),
`fee` int(10),
`recipientClientNumber`varchar(15),
`IBAN`varchar(15),
`BIC` varchar(8),
`recipientFirstName`varchar(10),
`recipientLastName` varchar(10),
`previousAvailableAmount`int(20),
`currentAvailableAmount`int(20),
`reason` varchar(20),
primary key (`transactionId`)
);
