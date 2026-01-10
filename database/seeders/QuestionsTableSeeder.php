<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category; // Ensure this matches your Model namespace

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Fetch Categories to create a dynamic lookup map (Name -> ID)
        // This prevents errors if your category IDs change in the database.
        $cats = Category::pluck('id', 'name')->toArray();

        // 2. Define the full dataset (Original 38 + New 63 = 101 Questions)
        $questions = [
            
            // ==========================================
            // ORIGINAL BATCH (From JSON Data)
            // ==========================================
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Sales of Wine cases. Rose=1100, Red=1470, White=1410. Total=3980. What percentage were Rose?",
                'options' => json_encode(["26.3%","23.6%","26.6%","29.6%","27.6%"]),
                'correct_option_index' => 4,
                'explanation' => "(1100 / 3980) * 100 = 27.6%."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most nearly opposite in meaning to - Heed",
                'options' => json_encode(["Ignore","Express","Converse","Attend"]),
                'correct_option_index' => 0,
                'explanation' => "Heed means to pay attention; Ignore means to disregard."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Select the correctly spelled word:",
                'options' => json_encode(["Maneageable","Manegeable","Managible","Manageable"]),
                'correct_option_index' => 3,
                'explanation' => "Manageable."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Indifferent : Stoic",
                'options' => json_encode(["Idol : Pagan","Statue : Temple","Care : Sophist","Ardent : Zealot"]),
                'correct_option_index' => 3,
                'explanation' => "Indifferent behavior marks a stoic. Ardent behavior marks a zealot."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most similar in meaning to - Exonerate",
                'options' => json_encode(["Deteriorate","Convey","Deliberate","Absolve"]),
                'correct_option_index' => 3,
                'explanation' => "Exonerate means to absolve from blame."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Metallurgy involves producing alloys for use in engineering products. True or False?",
                'options' => json_encode(["True","False","Cannot Say"]),
                'correct_option_index' => 0,
                'explanation' => "True. The text defines metallurgy as being concerned with the production of metallic components... this involves the production of alloys."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "An insurance policy covering fire damage to stock pays 70% of the costs for the first $1,000 and all of the cost thereafter up to a total of $7,000. Following a claim, the claimant had to pay an additional $2,000 to replace damaged stock. How much was the stock worth?",
                'options' => json_encode(["$9,300","$9,700","$9,500","$8,700","$8,300"]),
                'correct_option_index' => 1,
                'explanation' => "Insurance paid 70% of $1,000 ($700) + remaining $7,000 = $7,700. Claimant paid $2,000. Total = $9,700."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Passengers Q4 2004. London 11k, Paris 14k, Rome 13k, Berlin 8k. What is the total?",
                'options' => json_encode(["46,000","44,000","43,000","45,000","42,000"]),
                'correct_option_index' => 0,
                'explanation' => "11 + 14 + 13 + 8 = 46 (thousands)."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Hothead : Forethought",
                'options' => json_encode(["Blatant : Scandal","Despair : Anger","Coward : Courage","Goal : Ambition"]),
                'correct_option_index' => 2,
                'explanation' => "A hothead lacks forethought. A coward lacks courage."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: 190 units sold in February out of 1166 total. What is the percentage?",
                'options' => json_encode(["18%","12%","16%","17%","14%"]),
                'correct_option_index' => 2,
                'explanation' => "(190/1166) * 100 = 16.29%, rounded to 16%."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "People should be held accountable for their own actions. However, no person should be held accountable for actions over which they have no control. Which of the following is the most logical conclusion?",
                'options' => json_encode(["People should not be held accountable for the actions of other people.","People have control over their own actions.","People cannot control the actions of other people.","Actions that cannot be controlled should not be punished.","People have no control over the actions of others"]),
                'correct_option_index' => 3,
                'explanation' => "The argument logically leads to 'Actions that cannot be controlled should not be punished'."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "There are two standing stones in a field. The first casts a shadow 4 metres long and the second casts a shadow 5 metres long. How tall is the second stone? Statement 1: The first stone is 3 meters tall. Statement 2: The stones are 20 metres apart.",
                'options' => json_encode(["Statement 1 alone","Statement 2 alone","Both together","Each alone","Neither"]),
                'correct_option_index' => 0,
                'explanation' => "Statement 1 gives the ratio of height to shadow. Statement 2 is irrelevant."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most nearly opposite in meaning to - Frustrate",
                'options' => json_encode(["Mollify","Pacify","Encourage","Irritate"]),
                'correct_option_index' => 2,
                'explanation' => "Frustrate means to prevent; Encourage means to support."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Meat Sales. Beef=1670kg, Total Meat=4850kg. What percentage was Beef?",
                'options' => json_encode(["32.2%","33.6%","29.2%","28.4%","34.4%"]),
                'correct_option_index' => 4,
                'explanation' => "(1670 / 4850) * 100 = 34.4%."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Oats : Wheat : Barley",
                'options' => json_encode(["Porridge","Straw","Rye","Hay"]),
                'correct_option_index' => 2,
                'explanation' => "These are all cereal crops."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Thames : Don : Tiber",
                'options' => json_encode(["Orinoco","Seine","Mississippi","Indus"]),
                'correct_option_index' => 1,
                'explanation' => "These are all European rivers."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Select the correctly spelled word:",
                'options' => json_encode(["Resistence","Resistense","Resistance","Resistanse"]),
                'correct_option_index' => 2,
                'explanation' => "Resistance."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Arrow : Spear : Javelin",
                'options' => json_encode(["Pilum","Shield","Sword","Armour"]),
                'correct_option_index' => 0,
                'explanation' => "These are all ranged weapons. A Pilum is a thrown spear."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: A total of 152 tons of potatoes imported at $120 per ton. What was the average value per month over 5 months?",
                'options' => json_encode(["$3,448","$3,648","$3,728","$3,348","$3,655"]),
                'correct_option_index' => 1,
                'explanation' => "Total value = 152 * 120 = $18,240. Average per month = 18240 / 5 = $3,648."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Marketing Budget. Aardvark account for 54% of business. Blue Arrow accounts for 26%. How much do the remaining clients account for?",
                'options' => json_encode(["18%","17%","20%","16%","22%"]),
                'correct_option_index' => 2,
                'explanation' => "100% - (54% + 26%) = 20%."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Seal : Whale : Manatee",
                'options' => json_encode(["Dolphin","Squid","Panda","Bear"]),
                'correct_option_index' => 0,
                'explanation' => "These are all aquatic mammals."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "James was paid $5 more for each day of work than he was paid for the preceding day. He was hired for 5 days. Statement 1: He was paid twice as much for the last day as for the first. Statement 2: He made half the total by the end of day 3. Which statement is sufficient to find the total pay?",
                'options' => json_encode(["Statement 1 alone","Statement 2 alone","Both together","Each alone","Neither"]),
                'correct_option_index' => 3,
                'explanation' => "Using algebra (x, x+5, x+10...), either statement allows you to solve for 'x' and thus find the total."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Total passengers 51,000. Berlin passengers 7,000. What is the approximate fraction?",
                'options' => json_encode(["1/8","1/4","1/7","1/5","1/15"]),
                'correct_option_index' => 2,
                'explanation' => "7,000 / 51,000 is approximately 1/7 (since 7*7=49)."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Total sales: Germany(296), UK(260), France(200), Total(1166). What percentage is accounted for by these three?",
                'options' => json_encode(["61.6%","62.3%","63.2%","64.8%","66.9%"]),
                'correct_option_index' => 3,
                'explanation' => "296+260+200 = 756. (756/1166)*100 = 64.8%."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Select the correctly spelled word:",
                'options' => json_encode(["Omission","Ommission","Ommision","Omision"]),
                'correct_option_index' => 0,
                'explanation' => "Omission."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most similar in meaning to - Augment",
                'options' => json_encode(["Deplete","Enhance","Disagree","Restrain"]),
                'correct_option_index' => 1,
                'explanation' => "Augment means to make greater or enhance."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Nuclear fission is used to produce energy for nuclear power. Alpha particles can be by-products. True or False?",
                'options' => json_encode(["True","False","Cannot Say"]),
                'correct_option_index' => 0,
                'explanation' => "True. The text explicitly states that by-products include alpha particles."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Prions are infectious protein structures. TSE, BSE and scrapie are all forms of CJD. Is this statement True, False, or Can't Say based on the text?",
                'options' => json_encode(["True","False","Cannot Say"]),
                'correct_option_index' => 1,
                'explanation' => "False. The text classifies them under TSEs, but CJD is a specific disease, not the category for all of them."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "Alberto buys a car from Juan and sells it to Antonio. How much did Juan pay for the car? Statement 1: Juan sold it to Alberto at 20% profit and Antonio bought it for $10,000. Statement 2: Alberto sold it to Antonio for 10% profit.",
                'options' => json_encode(["Statement 1 alone","Statement 2 alone","Both together","Each alone","Neither"]),
                'correct_option_index' => 2,
                'explanation' => "You need both statements to work backwards from Antonio's price to Juan's original cost."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Imports. Coil=93k tons, Sheet=113k tons. What is the approximate ratio of Sheet to Coil?",
                'options' => json_encode(["11:9","8:9","7:11","3:8","7:4"]),
                'correct_option_index' => 0,
                'explanation' => "113:93 is approximately 11:9."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "Sabine earns more than Pedro. Sabine earns the same as Maria. Antonio earns less than Maria. Valeria earns less than Sabine. Pedro earns less than Valeria. Who earns the least money?",
                'options' => json_encode(["Sabine","Valeria","Antonio","Pedro","Maria"]),
                'correct_option_index' => 3,
                'explanation' => "Sequence: Maria = Sabine > Antonio > Valeria > Pedro. Pedro is at the bottom."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Government : Democracy",
                'options' => json_encode(["Church : Pope","Pharaoh : Dynasty","King : Senate","Vote : Equality"]),
                'correct_option_index' => 1,
                'explanation' => "A government rules in a democracy. A pharaoh rules in a dynasty."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most similar in meaning to - Pragmatic",
                'options' => json_encode(["Irrational","Impractical","Exuberant","Realistic"]),
                'correct_option_index' => 3,
                'explanation' => "Pragmatic means dealing with things sensibly and realistically."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Select the correctly spelled word:",
                'options' => json_encode(["Prefference","Prefarence","Prefrance","Preference"]),
                'correct_option_index' => 3,
                'explanation' => "Preference."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Units imported UK: Jan(40), Feb(44), Mar(36), Apr(47). What is the average?",
                'options' => json_encode(["41.75","43.35","44.75","40.65","43.25"]),
                'correct_option_index' => 0,
                'explanation' => "(40+44+36+47) / 4 = 167 / 4 = 41.75."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Total students = 666. Male = 65%. How many female students were admitted?",
                'options' => json_encode(["340","233","244","433","343"]),
                'correct_option_index' => 1,
                'explanation' => "If 65% are male, then 35% are female. 35% of 666 is 233.1, rounded to 233."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Select the correctly spelled word:",
                'options' => json_encode(["Accomplish","Acomplish","Accommplish","Accomplesh"]),
                'correct_option_index' => 0,
                'explanation' => "Accomplish."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Cheese : Milk : Butter",
                'options' => json_encode(["Lard","Margarine","Hide","Yoghurt"]),
                'correct_option_index' => 3,
                'explanation' => "These are all dairy products."
            ],

            // ==========================================
            // NEW ADDITIONS (The 63 new questions)
            // ==========================================
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "What is the next term in a sequence of numbers? Statement 1 - The third term is 36. Statement 2 - The second term is three times the first and the third term is three times the second. Which statement is sufficient?",
                'options' => json_encode(['Statement 1 alone', 'Statement 2 alone', 'Both together', 'Each alone', 'Neither']),
                'correct_option_index' => 2,
                'explanation' => "You need both the exact value and the relationship between terms to solve the sequence."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "'X' is a positive integer. Is 'X' odd or even? Statement 1 - 2X is even. Statement 2 - The square of X is odd. Which statement is sufficient?",
                'options' => json_encode(['Statement 1 alone', 'Statement 2 alone', 'Both together', 'Each alone', 'Neither']),
                'correct_option_index' => 1,
                'explanation' => "Statement 2 alone is sufficient. The square of an even integer is always even and square of an odd integer is always odd. So if square of X is odd, then X must be odd."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "An insurance policy covering flood damage to stock pays 80% of the costs for the first $1,000 and all of the cost thereafter up to a total of $5,000. Following a claim, the claimant had to pay an additional $1,000 to replace damaged stock. How much was the stock worth?",
                'options' => json_encode(['$5,800', '$6,400', '$6,200', '$6,800', '$6,000']),
                'correct_option_index' => 3,
                'explanation' => "Insurance paid 80% of $1,000 ($800) + remaining $5,000 = $5,800. Claimant paid $1,000. Total = $6,800."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "What percentage of all the marbles in the bag were black? Statement 1 - The ratio of black to white marbles was 20:1. Statement 2 - There were 5 white marbles. Which statement is sufficient?",
                'options' => json_encode(['Statement 1 alone', 'Statement 2 alone', 'Both together', 'Each alone', 'Neither']),
                'correct_option_index' => 4,
                'explanation' => "Neither statement is sufficient because we cannot determine if there are other colored marbles in the bag."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "What percentage is Jane's salary of Sally's salary? Statement 1 - Jane's salary is 80% of Mandy's. Statement 2 - Sally's salary is 120% of Mandy's. Which statement is sufficient?",
                'options' => json_encode(['Statement 1 alone', 'Statement 2 alone', 'Both together', 'Each alone', 'Neither']),
                'correct_option_index' => 2,
                'explanation' => "Both statements together allow us to calculate that Jane earns 80/120 or 66% of Sally's salary."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "A crate of wine costs the retailer $225. How much profit does the retailer make on each bottle? Statement 1 - Bottles are sold for $25 each. Statement 2 - There are 12 bottles in a crate. Which statement is sufficient?",
                'options' => json_encode(['Statement 1 alone', 'Statement 2 alone', 'Both together', 'Each alone', 'Neither']),
                'correct_option_index' => 2,
                'explanation' => "You need both the selling price per bottle and the number of bottles to calculate profit per bottle."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "In the national university baseball league: Harvard have won the fewest games followed by Yale, Duke and Princeton. Cornell are one game ahead of Duke. Princeton and Stanford are two games ahead of Cornell. Duke and Princeton have won an equal number. Duke wins the next match. Which team is now at the same level as Cornell?",
                'options' => json_encode(['Yale', 'Princeton', 'Duke', 'Stanford', 'Harvard']),
                'correct_option_index' => 2,
                'explanation' => "After Duke wins, they move up to Cornell's level in the rankings."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "Fiona visits either her mother or sister every day. If it is Monday and she has the car then Fiona visits her mother. If it is a public holiday and she does not have the car then Fiona visits her sister. Which statement must be true?",
                'options' => json_encode(['If not a holiday and Monday then visits mother', 'If has car and not holiday then visits mother', 'If has car and is holiday then visits mother', 'If has car and does not visit mother then not Monday', 'If Monday and holiday then visits mother']),
                'correct_option_index' => 3,
                'explanation' => "This is the only statement that logically follows from the given conditions."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "Of teams competing in world archery championships, 40% are from Europe. Three quarters as many are from US and one tenth from Africa. What fraction are from neither Europe, US or Africa?",
                'options' => json_encode(['2/5', '3/10', '1/5', '2/3', '3/5']),
                'correct_option_index' => 2,
                'explanation' => "Europe 40% + US 30% + Africa 10% = 80%, leaving 20% or 1/5 from other countries."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Critical Reasoning'],
                'question_text' => "Richard paid more for his house than did Robert. Robert paid less than John. Derek paid more than Sarah. Sarah paid the same as John. Which must be true?",
                'options' => json_encode(['Richard paid more than Derek', 'Derek paid more than Robert', 'Richard paid more than John', 'Sarah paid less than Richard', 'Sarah paid less than Robert']),
                'correct_option_index' => 1,
                'explanation' => "Derek > Sarah = John > Robert, so Derek paid more than Robert must be true."
            ],

            // ==========================================
            // NUMERICAL REASONING (2019) - Additional Questions
            // ==========================================
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Sales of Wine cases. Rose=1100, Red=1470, White=1410. Total=3980. What percentage were Rose?",
                'options' => json_encode(['26.3%', '23.6%', '26.6%', '29.6%', '27.6%']),
                'correct_option_index' => 4,
                'explanation' => "(1100 / 3980) * 100 = 27.6%."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Meat Sales. Beef=1670kg, Total Meat=4850kg. What percentage was Beef?",
                'options' => json_encode(['32.2%', '33.6%', '29.2%', '28.4%', '34.4%']),
                'correct_option_index' => 4,
                'explanation' => "(1670 / 4850) * 100 = 34.4%."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Imports. Coil=93k tons, Sheet=113k tons. What is the approximate ratio of Sheet to Coil?",
                'options' => json_encode(['11:9', '8:9', '7:11', '3:8', '7:4']),
                'correct_option_index' => 0,
                'explanation' => "113:93 is approximately 11:9."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Marketing Budget. Aardvark accounts for 54% of business. Blue Arrow accounts for 26%. How much do remaining clients account for?",
                'options' => json_encode(['18%', '17%', '20%', '16%', '22%']),
                'correct_option_index' => 2,
                'explanation' => "100% - (54% + 26%) = 20%."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: 190 units sold in February out of 1166 total. What is the percentage?",
                'options' => json_encode(['18%', '12%', '16%', '17%', '14%']),
                'correct_option_index' => 2,
                'explanation' => "(190/1166) * 100 = 16.29%, rounded to 16%."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Units imported UK: Jan(40), Feb(44), Mar(36), Apr(47). What is the average?",
                'options' => json_encode(['41.75', '43.35', '44.75', '40.65', '43.25']),
                'correct_option_index' => 0,
                'explanation' => "(40+44+36+47) / 4 = 167 / 4 = 41.75."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Total sales: Germany(296), UK(260), France(200), Total(1166). What percentage is accounted for by these three?",
                'options' => json_encode(['61.6%', '62.3%', '63.2%', '64.8%', '66.9%']),
                'correct_option_index' => 3,
                'explanation' => "296+260+200 = 756. (756/1166)*100 = 64.8%."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Passengers Q4 2004. London 11k, Paris 14k, Rome 13k, Berlin 8k. What is the total?",
                'options' => json_encode(['46,000', '44,000', '43,000', '45,000', '42,000']),
                'correct_option_index' => 0,
                'explanation' => "11 + 14 + 13 + 8 = 46 (thousands)."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: 152 tons of potatoes imported at $120 per ton. What was average value per month over 5 months?",
                'options' => json_encode(['$3,448', '$3,648', '$3,728', '$3,348', '$3,655']),
                'correct_option_index' => 1,
                'explanation' => "Total value = 152 * 120 = $18,240. Average per month = 18240 / 5 = $3,648."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Numerical Reasoning'],
                'question_text' => "Data: Total passengers 51,000. Berlin passengers 7,000. What is the approximate fraction?",
                'options' => json_encode(['1/8', '1/4', '1/7', '1/5', '1/15']),
                'correct_option_index' => 2,
                'explanation' => "7,000 / 51,000 is approximately 1/7 (since 7*7=49)."
            ],

            // ==========================================
            // VERBAL REASONING (2019) - Additional Analogies
            // ==========================================
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Meerkat : Honeybee : Wolf",
                'options' => json_encode(['Bear', 'Ant', 'Eagle', 'Tiger']),
                'correct_option_index' => 1,
                'explanation' => "These are all social animals that live in colonies or packs."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Tomato : Apple : Pear",
                'options' => json_encode(['Potato', 'Asparagus', 'Lemon', 'Broccoli']),
                'correct_option_index' => 2,
                'explanation' => "These are all fruits (botanically speaking)."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Prague : Paris : Berlin",
                'options' => json_encode(['Munich', 'Lisbon', 'Naples', 'Barcelona']),
                'correct_option_index' => 1,
                'explanation' => "These are all European capital cities."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Fly : Spider : Moth",
                'options' => json_encode(['Kangaroo', 'Bird', 'Mouse', 'Ant']),
                'correct_option_index' => 3,
                'explanation' => "These are all arthropods (invertebrates with jointed legs)."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Copper : Tin : Zinc",
                'options' => json_encode(['Oxygen', 'Brass', 'Salt', 'Bronze']),
                'correct_option_index' => 0,
                'explanation' => "These are all chemical elements (note: Brass and Bronze are alloys)."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Courtroom : Lawyer",
                'options' => json_encode(['Arena : Gladiator', 'Contest : Team', 'Teacher : Class', 'Commuter : Train']),
                'correct_option_index' => 0,
                'explanation' => "A lawyer performs in a courtroom. A gladiator performs in an arena."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Star : Astronomy",
                'options' => json_encode(['Religion : Deity', 'Event : History', 'Ice : Geology', 'Vase : Pottery']),
                'correct_option_index' => 1,
                'explanation' => "Stars are studied as part of astronomy. Events are studied as part of history."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Deplete : Decrease",
                'options' => json_encode(['Shun : Avoid', 'Overlook : Find', 'Danger : Evade', 'Like : Detest']),
                'correct_option_index' => 0,
                'explanation' => "Deplete and decrease are synonyms. Shun and avoid are synonyms."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Anaesthetic : Numb",
                'options' => json_encode(['Vaccine : Virus', 'Disease : Drug', 'Sedative : Drowsy', 'Action : Lunacy']),
                'correct_option_index' => 2,
                'explanation' => "An anaesthetic makes something numb. A sedative makes something drowsy."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Evaporate : Vapour",
                'options' => json_encode(['Centrifuge : Gas', 'Petrify : Stone', 'Saturate : Fluid', 'Corrode : Acid']),
                'correct_option_index' => 1,
                'explanation' => "Vapour may be the result of evaporation. Stone may be the result of petrifaction."
            ],

            // ==========================================
            // VERBAL REASONING - More Analogies
            // ==========================================
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Paltry is to Substantial as Acute is to",
                'options' => json_encode(['Angle', 'Redundant', 'Obtuse', 'Sharp']),
                'correct_option_index' => 2,
                'explanation' => "Paltry and substantial are opposites. Acute and obtuse are opposites."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Chapter is to Book as Color is to",
                'options' => json_encode(['Hue', 'Artist', 'Palette', 'Spectrum']),
                'correct_option_index' => 3,
                'explanation' => "A book is divided into chapters. A spectrum is divided into colors."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Sculptor is to Marble as Painter is to",
                'options' => json_encode(['Easel', 'Artist', 'Canvas', 'Brush']),
                'correct_option_index' => 2,
                'explanation' => "A sculptor works with marble. A painter works with canvas."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Hold is to Hatch as Room is to",
                'options' => json_encode(['Ship', 'Window', 'Space', 'Door']),
                'correct_option_index' => 3,
                'explanation' => "A hatch is the entrance to a hold. A door is the entrance to a room."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Volume is to Litre as Time is to",
                'options' => json_encode(['Minute', 'Period', 'Instant', 'Point']),
                'correct_option_index' => 0,
                'explanation' => "Litre is a unit of volume. Minute is a unit of time."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Wine is to Grape as Leather is to",
                'options' => json_encode(['Animal', 'Fur', 'Cure', 'Hide']),
                'correct_option_index' => 3,
                'explanation' => "Wine is made from grapes. Leather is made from hide."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Christianity : Islam : Judaism",
                'options' => json_encode(['Hinduism', 'Mormonism', 'Buddhism', 'Atheism']),
                'correct_option_index' => 1,
                'explanation' => "These are all monotheistic religions."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Michigan : Erie : Ontario",
                'options' => json_encode(['Ohio', 'Superior', 'Washington', 'Toronto']),
                'correct_option_index' => 1,
                'explanation' => "These are all Great Lakes."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Hen : Duck : Goose",
                'options' => json_encode(['Falcon', 'Sparrow', 'Turkey', 'Bird']),
                'correct_option_index' => 2,
                'explanation' => "These are all domestic fowl."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Complete the analogy -> Iceland : Sri Lanka : Australia",
                'options' => json_encode(['Spain', 'England', 'Portugal', 'Ireland']),
                'correct_option_index' => 3,
                'explanation' => "These are all islands."
            ],

            // ==========================================
            // VERBAL REASONING - Antonyms & Synonyms (More)
            // ==========================================
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most nearly opposite in meaning to - Abandon",
                'options' => json_encode(['Keep', 'Discover', 'Recover', 'Locate']),
                'correct_option_index' => 0,
                'explanation' => "Abandon means to give up; Keep means to retain."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most nearly opposite in meaning to - Mordant",
                'options' => json_encode(['Serene', 'Gentle', 'Penetrating', 'Acerbic']),
                'correct_option_index' => 1,
                'explanation' => "Mordant means harsh or biting; Gentle is the opposite."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most nearly opposite in meaning to - Dissonance",
                'options' => json_encode(['Note', 'Conformist', 'Chord', 'Harmony']),
                'correct_option_index' => 3,
                'explanation' => "Dissonance means lack of harmony; Harmony is the opposite."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most nearly opposite in meaning to - Refute",
                'options' => json_encode(['Believe', 'Prove', 'Allow', 'Contradict']),
                'correct_option_index' => 1,
                'explanation' => "Refute means to disprove; Prove is the opposite."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most nearly opposite in meaning to - Sedentary",
                'options' => json_encode(['Exciting', 'Inanimate', 'Wearisome', 'Active']),
                'correct_option_index' => 3,
                'explanation' => "Sedentary means characterized by sitting; Active is the opposite."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most nearly opposite in meaning to - Compromise",
                'options' => json_encode(['Confrontation', 'Concession', 'Indulgence', 'Allowance']),
                'correct_option_index' => 0,
                'explanation' => "Compromise involves agreement; Confrontation is direct opposition."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most nearly opposite in meaning to - Opulence",
                'options' => json_encode(['Magnanimity', 'Abstinence', 'Moderation', 'Poverty']),
                'correct_option_index' => 3,
                'explanation' => "Opulence means wealth; Poverty is the opposite."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most nearly opposite in meaning to - Deliberate",
                'options' => json_encode(['Purposeful', 'Conscious', 'Accidental', 'Intentional']),
                'correct_option_index' => 2,
                'explanation' => "Deliberate means intentional; Accidental is the opposite."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most similar in meaning to - Mesmerize",
                'options' => json_encode(['Contradict', 'Fascinate', 'Attack', 'Confuse']),
                'correct_option_index' => 1,
                'explanation' => "Mesmerize means to fascinate or captivate."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most similar in meaning to - Quirky",
                'options' => json_encode(['Appreciation', 'Ungrateful', 'Interruption', 'Peculiar']),
                'correct_option_index' => 3,
                'explanation' => "Quirky means peculiar or unusual in character."
            ],

            // ==========================================
            // VERBAL REASONING - More Synonyms
            // ==========================================
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most similar in meaning to - Consecrate",
                'options' => json_encode(['Dedicate', 'Decay', 'Appease', 'Plead']),
                'correct_option_index' => 0,
                'explanation' => "Consecrate means to dedicate to a sacred purpose."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most similar in meaning to - Lament",
                'options' => json_encode(['Mourn', 'Impulse', 'Peril', 'Fraud']),
                'correct_option_index' => 0,
                'explanation' => "Lament means to mourn or express grief."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most similar in meaning to - Manipulate",
                'options' => json_encode(['Gerrymander', 'Condescend', 'Conciliate', 'Deviate']),
                'correct_option_index' => 0,
                'explanation' => "Manipulate and gerrymander both involve controlling or influencing dishonestly."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most similar in meaning to - Abstruse",
                'options' => json_encode(['Simple', 'Unadorned', 'Painful', 'Perplexing']),
                'correct_option_index' => 3,
                'explanation' => "Abstruse means difficult to understand; perplexing."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most similar in meaning to - Incorporeal",
                'options' => json_encode(['Unbiased', 'Insubstantial', 'Deceptive', 'Agricultural']),
                'correct_option_index' => 1,
                'explanation' => "Incorporeal means without physical form; insubstantial."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most similar in meaning to - Undermine",
                'options' => json_encode(['Subvert', 'Demand', 'Depreciate', 'Dishearten']),
                'correct_option_index' => 0,
                'explanation' => "Undermine means to subvert or weaken gradually."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Choose the word most similar in meaning to - Ignominious",
                'options' => json_encode(['Thorough', 'Senseless', 'Discomfiting', 'Vague']),
                'correct_option_index' => 2,
                'explanation' => "Ignominious means deserving or causing public disgrace; discomfiting."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Which word means - to waste away; to wither",
                'options' => json_encode(['Atrophy', 'Shrink', 'Desiccate', 'Contract']),
                'correct_option_index' => 0,
                'explanation' => "Atrophy means to waste away or wither from lack of use."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Which word means - to understand; to figure out",
                'options' => json_encode(['Dissemble', 'Improvise', 'Cosset', 'Fathom']),
                'correct_option_index' => 3,
                'explanation' => "Fathom means to understand or comprehend after much thought."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Which word means - to scold; to reprove; to reproach",
                'options' => json_encode(['Berate', 'Refute', 'Condemn', 'Subjugate']),
                'correct_option_index' => 0,
                'explanation' => "Berate means to scold or criticize angrily."
            ],

            // ==========================================
            // VERBAL REASONING - Spelling (Fixed)
            // ==========================================
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Select the correctly spelled word:",
                'options' => json_encode(['Apearance', 'Appearence', 'Appearanse', 'Appearance']),
                'correct_option_index' => 3,
                'explanation' => "Appearance."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Select the correctly spelled word:",
                'options' => json_encode(['Contreversial', 'Contreversel', 'Controversial', 'Controvertial']),
                'correct_option_index' => 2,
                'explanation' => "Controversial."
            ],
            [
                'year' => 2019,
                'category_id' => $cats['Verbal Reasoning'],
                'question_text' => "Select the correctly spelled word:",
                'options' => json_encode(['Millionair', 'Millionare', 'Millionnaire', 'Millionaire']),
                'correct_option_index' => 3,
                'explanation' => "Millionaire."
            ]
        ];

        foreach ($questions as $question) {
            DB::table('questions')->insert([
                'year' => $question['year'],
                'category_id' => $question['category_id'],
                'question_text' => $question['question_text'],
                'options' => $question['options'],
                'correct_option_index' => $question['correct_option_index'],
                'explanation' => $question['explanation'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}