/**
 * ! LINGUAGEM DA PÁGINA
 * ? Português JQUERY
 */
$(function () {
    $(".pt").click(function () {
      localStorage.setItem("language", 1);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Voluntariado</a>");
      $(".breadcrumb-item").eq(1).text("Cruz Vermelha Portuguesa");
      $(".h1").text("Cruz Vermelha Portuguesa");
      $(".description").children().eq(0).text("A Cruz Vermelha é uma instituição humanitária internacional sem vinculação estatal que atua na defesa de pessoas em situação de vulnerabilidade causada por conflitos armados.");
      $(".description").children().eq(1).text("Voluntários da Cruz Vermelha Portuguesa são aqueles que de forma consciente, num espírito de solidariedade e compromisso, prestam o seu contributo à população.");
      $(".accordion").children().eq(0).text("Missão");
      $(".accordion").children().eq(2).text("Quem somos");
      $(".accordion").children().eq(4).text("O que te pedimos");
      $(".accordion").children().eq(6).text("O que fazemos");
      $(".panel").children().eq(0).html("A Cruz Vermelha Portuguesa esforça-se para prevenir e aliviar o sofrimento humano, em Portugal e no mundo. Constitui missão da CVP prestar assistência humanitária e social, em especial aos mais vulneráveis, prevenindo e reparando o sofrimento e contribuindo para a defesa da vida, da saúde e da dignidade humana. Artigo 5.º Decreto-lei n.º 281/2007, 7 de agosto. Para o desenvolvimento da nossa atividade, mobilizamos o “Poder da Humanidade”, bem como a generosidade dos doadores e parceiros por todo o país. Na qualidade de Sociedade Nacional do Movimento Internacional da Cruz Vermelha e do Crescente Vermelho, agimos no respeito pelos princípios fundamentais da Humanidade, Imparcialidade, Neutralidade, Independência, Voluntariado, Unidade e Universalidade. Saiba mais explorando a nossa infografia repleta de dados e números que explicam como os nossos voluntários, doadores e colaboradores ajudam as pessoas em Portugal e noutras partes do mundo.");
      $(".panel").children().eq(1).html("A Juventude Cruz Vermelha (JCV) é o departamento juvenil da Cruz Vermelha Portuguesa. Guiados pelos Princípios Fundamentais da instituição, desenvolvemos o nosso trabalho com base no voluntariado e com o objetivo principal de promover a resiliência das crianças e jovens nas comunidades locais. Somos já mais de 2.000 voluntários jovens a trabalhar em mais de 90 locais, com mais de 250 projetos no terreno e cerca de 50.000 beneficiários diretos por ano. Na JVC encontrarás um espaço aberto à tua energia, às tuas ideias e à tua vontade de fazer mais. Assim, se tens vontade de aumentar os teus conhecimentos e competências pessoais e interesse em contribuir para a felicidade dos mais desfavorecidos, não percas tempo e junta-te a nós!");
      $(".panel").children().eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Compromisso, com os valores da instituição;</li><li><i class='fa-solid fa-square squareli'></i>Produtividade, ter espírito crítico, tomar a iniciativa, querer fazer mais e chegar mais longe;</li><li><i class='fa-solid fa-square squareli'></i>Envolvimento, acreditar nos objetivos e propósitos da organização, perspetivando sempre resultados positivos;</li><li><i class='fa-solid fa-square squareli'></i>Entrega, ter a capacidade de abraçar os diversos projetos, mostrando o melhor de ti.</li></ul>");
      $(".panel").children().eq(3).html("O público-alvo da JCV são crianças (5-11 anos), adolescentes (12-17 anos) e jovens adultos (18-35 anos), os quais participam na organização enquanto voluntários, beneficiários ou líderes/ agentes de mudança positiva.<br><br>Desenvolvemos o nosso trabalho numa perspetiva de educação por pares, de jovens para jovens, e com recurso a metodologias de educação não formal, nas seguintes áreas de intervenção:Pode consultar aqui, o Relatório 2021 e projeções para o ano 2022 da Juventude Cruz Vermelha.");
    });
  });
  /**
   * ! LINGUAGEM DA PÁGINA
   * ? Inglês JQUERY
   */
  $(function () {
    $(".en").click(function () {
      localStorage.setItem("language", 2);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Volunteer</a>");
          $(".breadcrumb-item").eq(1).text("Cruz Vermelha Portuguesa");
          $(".h1").text("Cruz Vermelha Portuguesa");
          $(".description").children().eq(0).text("A Cruz Vermelha is an international humanitarian institution with no state affiliation that works to defend people in vulnerable situations caused by armed conflicts.");
          $(".description").children().eq(1).text("Portuguese volunteers from Cruz Vermelha are those who consciously, in a spirit of solidarity and commitment, make their contribution to the population.");
          $(".accordion").children().eq(0).text("Mission");
          $(".accordion").children().eq(2).text("About us");
          $(".accordion").children().eq(4).text("What we ask you");
          $(".accordion").children().eq(6).text("What we do");
          $(".panel").children().eq(0).html("The Portuguese Cruz Vermelha strives to prevent and alleviate human suffering, in Portugal and worldwide. It is CVP's mission to provide humanitarian and social assistance, especially to the most vulnerable, preventing and repairing suffering and contributing to the defense of life, health and human dignity. Article 5, Decree-Law No. 281/2007, August 7th.<br><br>For the development of our activity, we mobilize the “Power of Humanity”, as well as the generosity of donors and partners throughout the country. As the National Society of the International Red Cross and Red Crescent Movement, we act in accordance with the fundamental principles of Humanity, Impartiality, Neutrality, Independence, Volunteering, Unity and Universality.<br><br>Find out more by exploring our infographic full of data and figures that explain how our volunteers, donors and collaborators help people in Portugal and in other parts of the world.");
          $(".panel").children().eq(1).html("The Juventude Cruz Vermelha (JCV) is the youth department of the Portuguese Red Cross. Guided by the Fundamental Principles of the institution, we develop our work based on volunteering and with the main objective of promoting the resilience of children and young people in local communities. We are already more than 2,000 young volunteers working in more than 90 locations, with more than 250 projects in the field and around 50,000 direct beneficiaries per year.<br><br>At JVC you will find a space open to your energy, your ideas and your willingness to do more. So, if you want to increase your personal knowledge and skills and are interested in contributing to the happiness of the most underprivileged, don't waste time and join us!");
          $(".panel").children().eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Commitment to the institution's values;</li><li><i class='fa-solid fa-square squareli'></i>Proactivity, having a critical spirit, taking the initiative, wanting to do more and go further;</li><li><i class='fa-solid fa-square squareli'></i>Involvement, believing in the objectives and purposes of the organization, always looking for positive results;</li><li><i class='fa-solid fa-square squareli'></i>Delivery, having the ability to embrace the different projects, showing the best of you.</li></ul>");
          $(".panel").children().eq(3).html("JCV's target audience is children (5-11 years old), teenagers (12-17 years old) and young adults (18-35 years old), who participate in the organization as volunteers, beneficiaries or leaders/agents of positive change.<br><br>We develop our work from a perspective of peer education, from young people for young people, and using non-formal education methodologies, in the following areas of intervention:You can consult the 2021 Report and projections for the year 2022 here of the Cruz Vermelha Youth.");
        });
  });
  /**
   * ! LINGUAGEM DA PÁGINA
   * ? Françes JQUERY
   */
  $(function () {
    $(".fr").click(function () {
      localStorage.setItem("language", 3);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Faire du Bénévole</a>");
          $(".breadcrumb-item").eq(1).text("Cruz Vermelha Portuguesa");
          $(".h1").text("Cruz Vermelha Portuguesa");
          $(".description").children().eq(0).text("La Cruz Vermelha est une institution humanitaire internationale sans affiliation étatique qui agit pour la défense des personnes en situation de vulnérabilité causée par les conflits armés.");
          $(".description").children().eq(1).text("Les volontaires de la Cruz Vermelha Portuguesa sont ceux qui consciemment, dans un esprit de solidarité et d'engagement, apportent leur contribution à la population.");
          $(".accordion").children().eq(0).text("Mission");
          $(".accordion").children().eq(2).text("À propos de nous");
          $(".accordion").children().eq(4).text("Ce que nous vous demandons");
          $(".accordion").children().eq(6).text("Ce que nous faisons");
          $(".panel").children().eq(0).html("Le Portugais Cruz Vermelha s'efforce de prévenir et d'alléger la souffrance humaine, au Portugal et dans le monde. C'est la mission de CVP de fournir une assistance humanitaire et sociale, en particulier aux plus vulnérables, de prévenir et de réparer les souffrances et de contribuer à la défense de la vie, de la santé et de la dignité humaine. Article 5, Décret-loi n° 281/2007, 7 août.<br><br>Pour le développement de notre activité, nous mobilisons le « Pouvoir de l'Humanité », ainsi que la générosité des donateurs et partenaires dans tout le pays. En tant que Société nationale du Mouvement international de la Croix-Rouge et du Croissant-Rouge, nous agissons conformément aux principes fondamentaux d'humanité, d'impartialité, de neutralité, d'indépendance, de volontariat, d'unité et d'universalité.<br><br>En savoir plus en explorant notre infographie plein de données et de chiffres qui expliquent comment nos bénévoles, donateurs et collaborateurs aident les gens au Portugal et dans d'autres parties du monde.");
          $(".panel").children().eq(1).html("La Juventude Cruz Vermelha (JCV) est le département jeunesse de la Croix-Rouge portugaise. Guidés par les Principes fondamentaux de l'institution, nous développons notre travail basé sur le volontariat et avec l'objectif principal de promouvoir la résilience des enfants et des jeunes dans les communautés locales. Nous sommes déjà plus de 2 000 jeunes volontaires travaillant dans plus de 90 lieux, avec plus de 250 projets sur le terrain et environ 50 000 bénéficiaires directs par an.<br><br>Chez JVC, vous trouverez un espace ouvert à votre énergie, votre idées et votre volonté d'en faire plus. Alors, si vous souhaitez approfondir vos connaissances et compétences personnelles et êtes intéressé à contribuer au bonheur des plus démunis, ne perdez pas de temps et rejoignez-nous!");
          $(".panel").children().eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Engagement envers les valeurs de l'établissement;</li><li><i class='fa-solid fa-square squareli'></i>Proactivité, avoir un esprit critique, prendre des initiatives, vouloir faire plus et aller plus loin;</li><li><i class='fa-solid fa-square squareli'></i>Implication, croire aux objectifs et aux buts de l'organisation, toujours à la recherche de résultats positifs;</li><li><i class='fa-solid fa-square squareli'></i>Livraison, avoir la capacité d'embrasser les différents projets, montrer le meilleur de vous.</li></ul>");
          $(".panel").children().eq(3).html("Le public cible de JCV sont les enfants (5-11 ans), les adolescents (12-17 ans) et les jeunes adultes (18-35 ans), qui participent à l'organisation en tant que bénévoles, bénéficiaires ou leaders/agents de changement positif.<br><br>Nous développons notre travail dans une perspective d'éducation par les pairs, des jeunes pour les jeunes, et en utilisant des méthodologies d'éducation non formelle, dans les domaines d'intervention suivants : Vous pouvez consulter le Bilan 2021 et les projections pour l'année 2022 ici de la jeunesse Cruz Vermelha.");
        });
  });

  
addEventListener("DOMContentLoaded", (event) => {
  if (localStorage.getItem("language") == 1) {
    $(function () {
      localStorage.setItem("language", 1);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Voluntariado</a>");
      $(".breadcrumb-item").eq(1).text("Cruz Vermelha Portuguesa");
      $(".h1").text("Cruz Vermelha Portuguesa");
      $(".description").children().eq(0).text("A Cruz Vermelha é uma instituição humanitária internacional sem vinculação estatal que atua na defesa de pessoas em situação de vulnerabilidade causada por conflitos armados.");
      $(".description").children().eq(1).text("Voluntários da Cruz Vermelha Portuguesa são aqueles que de forma consciente, num espírito de solidariedade e compromisso, prestam o seu contributo à população.");
      $(".accordion").children().eq(0).text("Missão");
      $(".accordion").children().eq(2).text("Quem somos");
      $(".accordion").children().eq(4).text("O que te pedimos");
      $(".accordion").children().eq(6).text("O que fazemos");
      $(".panel").children().eq(0).html("A Cruz Vermelha Portuguesa esforça-se para prevenir e aliviar o sofrimento humano, em Portugal e no mundo. Constitui missão da CVP prestar assistência humanitária e social, em especial aos mais vulneráveis, prevenindo e reparando o sofrimento e contribuindo para a defesa da vida, da saúde e da dignidade humana. Artigo 5.º Decreto-lei n.º 281/2007, 7 de agosto. Para o desenvolvimento da nossa atividade, mobilizamos o “Poder da Humanidade”, bem como a generosidade dos doadores e parceiros por todo o país. Na qualidade de Sociedade Nacional do Movimento Internacional da Cruz Vermelha e do Crescente Vermelho, agimos no respeito pelos princípios fundamentais da Humanidade, Imparcialidade, Neutralidade, Independência, Voluntariado, Unidade e Universalidade. Saiba mais explorando a nossa infografia repleta de dados e números que explicam como os nossos voluntários, doadores e colaboradores ajudam as pessoas em Portugal e noutras partes do mundo.");
      $(".panel").children().eq(1).html("A Juventude Cruz Vermelha (JCV) é o departamento juvenil da Cruz Vermelha Portuguesa. Guiados pelos Princípios Fundamentais da instituição, desenvolvemos o nosso trabalho com base no voluntariado e com o objetivo principal de promover a resiliência das crianças e jovens nas comunidades locais. Somos já mais de 2.000 voluntários jovens a trabalhar em mais de 90 locais, com mais de 250 projetos no terreno e cerca de 50.000 beneficiários diretos por ano. Na JVC encontrarás um espaço aberto à tua energia, às tuas ideias e à tua vontade de fazer mais. Assim, se tens vontade de aumentar os teus conhecimentos e competências pessoais e interesse em contribuir para a felicidade dos mais desfavorecidos, não percas tempo e junta-te a nós!");
      $(".panel").children().eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Compromisso, com os valores da instituição;</li><li><i class='fa-solid fa-square squareli'></i>Produtividade, ter espírito crítico, tomar a iniciativa, querer fazer mais e chegar mais longe;</li><li><i class='fa-solid fa-square squareli'></i>Envolvimento, acreditar nos objetivos e propósitos da organização, perspetivando sempre resultados positivos;</li><li><i class='fa-solid fa-square squareli'></i>Entrega, ter a capacidade de abraçar os diversos projetos, mostrando o melhor de ti.</li></ul>");
      $(".panel").children().eq(3).html("O público-alvo da JCV são crianças (5-11 anos), adolescentes (12-17 anos) e jovens adultos (18-35 anos), os quais participam na organização enquanto voluntários, beneficiários ou líderes/ agentes de mudança positiva.<br><br>Desenvolvemos o nosso trabalho numa perspetiva de educação por pares, de jovens para jovens, e com recurso a metodologias de educação não formal, nas seguintes áreas de intervenção:Pode consultar aqui, o Relatório 2021 e projeções para o ano 2022 da Juventude Cruz Vermelha.");
    });
  } else if (localStorage.getItem("language") == 2) {
    $(function () {
      localStorage.setItem("language", 2);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Volunteer</a>");
          $(".breadcrumb-item").eq(1).text("Cruz Vermelha Portuguesa");
          $(".h1").text("Cruz Vermelha Portuguesa");
          $(".description").children().eq(0).text("A Cruz Vermelha is an international humanitarian institution with no state affiliation that works to defend people in vulnerable situations caused by armed conflicts.");
          $(".description").children().eq(1).text("Portuguese volunteers from Cruz Vermelha are those who consciously, in a spirit of solidarity and commitment, make their contribution to the population.");
          $(".accordion").children().eq(0).text("Mission");
          $(".accordion").children().eq(2).text("About us");
          $(".accordion").children().eq(4).text("What we ask you");
          $(".accordion").children().eq(6).text("What we do");
          $(".panel").children().eq(0).html("The Portuguese Cruz Vermelha strives to prevent and alleviate human suffering, in Portugal and worldwide. It is CVP's mission to provide humanitarian and social assistance, especially to the most vulnerable, preventing and repairing suffering and contributing to the defense of life, health and human dignity. Article 5, Decree-Law No. 281/2007, August 7th.<br><br>For the development of our activity, we mobilize the “Power of Humanity”, as well as the generosity of donors and partners throughout the country. As the National Society of the International Red Cross and Red Crescent Movement, we act in accordance with the fundamental principles of Humanity, Impartiality, Neutrality, Independence, Volunteering, Unity and Universality.<br><br>Find out more by exploring our infographic full of data and figures that explain how our volunteers, donors and collaborators help people in Portugal and in other parts of the world.");
          $(".panel").children().eq(1).html("The Juventude Cruz Vermelha (JCV) is the youth department of the Portuguese Red Cross. Guided by the Fundamental Principles of the institution, we develop our work based on volunteering and with the main objective of promoting the resilience of children and young people in local communities. We are already more than 2,000 young volunteers working in more than 90 locations, with more than 250 projects in the field and around 50,000 direct beneficiaries per year.<br><br>At JVC you will find a space open to your energy, your ideas and your willingness to do more. So, if you want to increase your personal knowledge and skills and are interested in contributing to the happiness of the most underprivileged, don't waste time and join us!");
          $(".panel").children().eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Commitment to the institution's values;</li><li><i class='fa-solid fa-square squareli'></i>Proactivity, having a critical spirit, taking the initiative, wanting to do more and go further;</li><li><i class='fa-solid fa-square squareli'></i>Involvement, believing in the objectives and purposes of the organization, always looking for positive results;</li><li><i class='fa-solid fa-square squareli'></i>Delivery, having the ability to embrace the different projects, showing the best of you.</li></ul>");
          $(".panel").children().eq(3).html("JCV's target audience is children (5-11 years old), teenagers (12-17 years old) and young adults (18-35 years old), who participate in the organization as volunteers, beneficiaries or leaders/agents of positive change.<br><br>We develop our work from a perspective of peer education, from young people for young people, and using non-formal education methodologies, in the following areas of intervention:You can consult the 2021 Report and projections for the year 2022 here of the Cruz Vermelha Youth.");
        
    });
  } else if (localStorage.getItem("language") == 3) {
    $(function () {
      localStorage.setItem("language", 3);
      $(".breadcrumb-item").eq(0).html("<a href='../view/volunteer.php'>Faire du Bénévole</a>");
          $(".breadcrumb-item").eq(1).text("Cruz Vermelha Portuguesa");
          $(".h1").text("Cruz Vermelha Portuguesa");
          $(".description").children().eq(0).text("La Cruz Vermelha est une institution humanitaire internationale sans affiliation étatique qui agit pour la défense des personnes en situation de vulnérabilité causée par les conflits armés.");
          $(".description").children().eq(1).text("Les volontaires de la Cruz Vermelha Portuguesa sont ceux qui consciemment, dans un esprit de solidarité et d'engagement, apportent leur contribution à la population.");
          $(".accordion").children().eq(0).text("Mission");
          $(".accordion").children().eq(2).text("À propos de nous");
          $(".accordion").children().eq(4).text("Ce que nous vous demandons");
          $(".accordion").children().eq(6).text("Ce que nous faisons");
          $(".panel").children().eq(0).html("Le Portugais Cruz Vermelha s'efforce de prévenir et d'alléger la souffrance humaine, au Portugal et dans le monde. C'est la mission de CVP de fournir une assistance humanitaire et sociale, en particulier aux plus vulnérables, de prévenir et de réparer les souffrances et de contribuer à la défense de la vie, de la santé et de la dignité humaine. Article 5, Décret-loi n° 281/2007, 7 août.<br><br>Pour le développement de notre activité, nous mobilisons le « Pouvoir de l'Humanité », ainsi que la générosité des donateurs et partenaires dans tout le pays. En tant que Société nationale du Mouvement international de la Croix-Rouge et du Croissant-Rouge, nous agissons conformément aux principes fondamentaux d'humanité, d'impartialité, de neutralité, d'indépendance, de volontariat, d'unité et d'universalité.<br><br>En savoir plus en explorant notre infographie plein de données et de chiffres qui expliquent comment nos bénévoles, donateurs et collaborateurs aident les gens au Portugal et dans d'autres parties du monde.");
          $(".panel").children().eq(1).html("La Juventude Cruz Vermelha (JCV) est le département jeunesse de la Croix-Rouge portugaise. Guidés par les Principes fondamentaux de l'institution, nous développons notre travail basé sur le volontariat et avec l'objectif principal de promouvoir la résilience des enfants et des jeunes dans les communautés locales. Nous sommes déjà plus de 2 000 jeunes volontaires travaillant dans plus de 90 lieux, avec plus de 250 projets sur le terrain et environ 50 000 bénéficiaires directs par an.<br><br>Chez JVC, vous trouverez un espace ouvert à votre énergie, votre idées et votre volonté d'en faire plus. Alors, si vous souhaitez approfondir vos connaissances et compétences personnelles et êtes intéressé à contribuer au bonheur des plus démunis, ne perdez pas de temps et rejoignez-nous!");
          $(".panel").children().eq(2).html("<ul><li><i class='fa-solid fa-square squareli'></i>Engagement envers les valeurs de l'établissement;</li><li><i class='fa-solid fa-square squareli'></i>Proactivité, avoir un esprit critique, prendre des initiatives, vouloir faire plus et aller plus loin;</li><li><i class='fa-solid fa-square squareli'></i>Implication, croire aux objectifs et aux buts de l'organisation, toujours à la recherche de résultats positifs;</li><li><i class='fa-solid fa-square squareli'></i>Livraison, avoir la capacité d'embrasser les différents projets, montrer le meilleur de vous.</li></ul>");
          $(".panel").children().eq(3).html("Le public cible de JCV sont les enfants (5-11 ans), les adolescents (12-17 ans) et les jeunes adultes (18-35 ans), qui participent à l'organisation en tant que bénévoles, bénéficiaires ou leaders/agents de changement positif.<br><br>Nous développons notre travail dans une perspective d'éducation par les pairs, des jeunes pour les jeunes, et en utilisant des méthodologies d'éducation non formelle, dans les domaines d'intervention suivants : Vous pouvez consulter le Bilan 2021 et les projections pour l'année 2022 ici de la jeunesse Cruz Vermelha.");
        
    });
  }
});